/**
 * Links Boots — three.js hero background.
 *
 * A slowly drifting constellation of nodes with lines drawn between near
 * neighbours: the same "earned links between real sites" idea the brand is
 * built on, rather than decoration for its own sake.
 *
 * Everything here is optional by design. three.js is only fetched once we know
 * the canvas exists, WebGL works, motion is wanted and data saving is off — so
 * the 670KB never loads for anyone who cannot or should not see the effect.
 * Any failure leaves the CSS gradient hero exactly as it was.
 */

const canvas = document.getElementById('heroCanvas');

/** Cheap pre-flight checks before committing to the library download. */
function shouldRender() {
  if (!canvas) return false;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return false;

  const conn = navigator.connection;
  if (conn && (conn.saveData || /(^|-)2g$/.test(conn.effectiveType || ''))) return false;

  try {
    const probe = document.createElement('canvas');
    const gl = probe.getContext('webgl2') || probe.getContext('webgl');
    if (!gl) return false;
    // Free the probe context immediately; browsers cap concurrent contexts.
    const lose = gl.getExtension('WEBGL_lose_context');
    if (lose) lose.loseContext();
    return true;
  } catch (err) {
    return false;
  }
}

if (shouldRender()) {
  init().catch(() => { /* silent: the gradient hero is a perfectly good fallback */ });
}

async function init() {
  const THREE = await import('./vendor/three.module.min.js');

  const PINK = new THREE.Color('#22D3EE');
  const PURPLE = new THREE.Color('#3B82F6');

  const hero = canvas.parentElement;
  let width = hero.clientWidth;
  let height = hero.clientHeight;

  // Fewer nodes on small screens: the link pass is O(n²).
  const NODE_COUNT = width < 700 ? 46 : width < 1100 ? 72 : 96;
  const LINK_DIST = width < 700 ? 26 : 22;
  const MAX_LINKS = 620;
  const SPREAD = { x: 78, y: 46, z: 42 };

  const renderer = new THREE.WebGLRenderer({
    canvas,
    alpha: true,
    antialias: window.devicePixelRatio < 2,
    powerPreference: 'low-power'
  });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
  renderer.setSize(width, height, false);

  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(58, width / height, 1, 400);
  camera.position.set(0, 0, 96);

  const group = new THREE.Group();
  scene.add(group);

  /* ------------------------------------------------------------- the nodes */

  const positions = new Float32Array(NODE_COUNT * 3);
  const colors = new Float32Array(NODE_COUNT * 3);
  const drift = [];
  const tint = new THREE.Color();

  for (let i = 0; i < NODE_COUNT; i++) {
    const x = (Math.random() - 0.5) * SPREAD.x * 2;
    const y = (Math.random() - 0.5) * SPREAD.y * 2;
    const z = (Math.random() - 0.5) * SPREAD.z * 2;

    positions[i * 3] = x;
    positions[i * 3 + 1] = y;
    positions[i * 3 + 2] = z;

    tint.copy(PINK).lerp(PURPLE, Math.random());
    colors[i * 3] = tint.r;
    colors[i * 3 + 1] = tint.g;
    colors[i * 3 + 2] = tint.b;

    drift.push({
      vx: (Math.random() - 0.5) * 0.035,
      vy: (Math.random() - 0.5) * 0.028,
      vz: (Math.random() - 0.5) * 0.022
    });
  }

  const nodeGeo = new THREE.BufferGeometry();
  nodeGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
  nodeGeo.setAttribute('color', new THREE.BufferAttribute(colors, 3));

  const nodeMat = new THREE.PointsMaterial({
    size: 2.4,
    map: makeDotTexture(THREE),
    vertexColors: true,
    transparent: true,
    opacity: 0.95,
    depthWrite: false,
    blending: THREE.AdditiveBlending,
    sizeAttenuation: true
  });

  group.add(new THREE.Points(nodeGeo, nodeMat));

  /* ------------------------------------------------------------- the links */

  const linkPositions = new Float32Array(MAX_LINKS * 6);
  const linkColors = new Float32Array(MAX_LINKS * 6);

  const linkGeo = new THREE.BufferGeometry();
  linkGeo.setAttribute('position', new THREE.BufferAttribute(linkPositions, 3));
  linkGeo.setAttribute('color', new THREE.BufferAttribute(linkColors, 3));

  const linkMat = new THREE.LineBasicMaterial({
    vertexColors: true,
    transparent: true,
    opacity: 0.34,
    depthWrite: false,
    blending: THREE.AdditiveBlending
  });

  const links = new THREE.LineSegments(linkGeo, linkMat);
  group.add(links);

  /** Rebuild the line list from current node positions. */
  function linkNearNodes() {
    let n = 0;

    for (let i = 0; i < NODE_COUNT && n < MAX_LINKS; i++) {
      const ax = positions[i * 3], ay = positions[i * 3 + 1], az = positions[i * 3 + 2];

      for (let j = i + 1; j < NODE_COUNT && n < MAX_LINKS; j++) {
        const dx = ax - positions[j * 3];
        const dy = ay - positions[j * 3 + 1];
        const dz = az - positions[j * 3 + 2];
        const dist = Math.sqrt(dx * dx + dy * dy + dz * dz);
        if (dist > LINK_DIST) continue;

        // Fade each line out as the two nodes drift apart.
        const strength = 1 - dist / LINK_DIST;
        const o = n * 6;

        linkPositions[o] = ax;
        linkPositions[o + 1] = ay;
        linkPositions[o + 2] = az;
        linkPositions[o + 3] = positions[j * 3];
        linkPositions[o + 4] = positions[j * 3 + 1];
        linkPositions[o + 5] = positions[j * 3 + 2];

        for (let k = 0; k < 2; k++) {
          const c = (i + k) * 3;
          linkColors[o + k * 3] = colors[c] * strength;
          linkColors[o + k * 3 + 1] = colors[c + 1] * strength;
          linkColors[o + k * 3 + 2] = colors[c + 2] * strength;
        }
        n++;
      }
    }

    linkGeo.setDrawRange(0, n * 2);
    linkGeo.attributes.position.needsUpdate = true;
    linkGeo.attributes.color.needsUpdate = true;
  }

  /* --------------------------------------------------------- interactivity */

  const pointer = { x: 0, y: 0, tx: 0, ty: 0 };

  function onPointerMove(ev) {
    pointer.tx = (ev.clientX / window.innerWidth - 0.5) * 2;
    pointer.ty = (ev.clientY / window.innerHeight - 0.5) * 2;
  }
  window.addEventListener('pointermove', onPointerMove, { passive: true });

  /* ------------------------------------------------------------- the loop */

  let frame = null;
  let running = false;
  const clock = new THREE.Clock();

  function step() {
    const dt = Math.min(clock.getDelta(), 0.05);   // clamp after a background tab
    const t = clock.elapsedTime;

    for (let i = 0; i < NODE_COUNT; i++) {
      const d = drift[i];
      let x = positions[i * 3] + d.vx;
      let y = positions[i * 3 + 1] + d.vy;
      let z = positions[i * 3 + 2] + d.vz;

      // Bounce softly off the bounds so the field never drains away.
      if (x > SPREAD.x || x < -SPREAD.x) d.vx *= -1;
      if (y > SPREAD.y || y < -SPREAD.y) d.vy *= -1;
      if (z > SPREAD.z || z < -SPREAD.z) d.vz *= -1;

      positions[i * 3] = x;
      positions[i * 3 + 1] = y;
      positions[i * 3 + 2] = z;
    }

    nodeGeo.attributes.position.needsUpdate = true;
    linkNearNodes();

    group.rotation.y = Math.sin(t * 0.06) * 0.28;
    group.rotation.x = Math.cos(t * 0.05) * 0.12;

    // Ease the camera toward the pointer for a shallow parallax.
    pointer.x += (pointer.tx - pointer.x) * Math.min(dt * 2.2, 1);
    pointer.y += (pointer.ty - pointer.y) * Math.min(dt * 2.2, 1);
    camera.position.x = pointer.x * 9;
    camera.position.y = -pointer.y * 6;
    camera.lookAt(0, 0, 0);

    renderer.render(scene, camera);
    frame = requestAnimationFrame(step);
  }

  function start() {
    if (running) return;
    running = true;
    clock.getDelta();          // drop the elapsed gap since the last stop
    frame = requestAnimationFrame(step);
  }

  function stop() {
    running = false;
    if (frame) { cancelAnimationFrame(frame); frame = null; }
  }

  /* --------------------------------------------------------------- resize */

  let resizeTimer = null;
  function onResize() {
    window.clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(function () {
      width = hero.clientWidth;
      height = hero.clientHeight;
      if (!width || !height) return;
      camera.aspect = width / height;
      camera.updateProjectionMatrix();
      renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
      renderer.setSize(width, height, false);
    }, 150);
  }
  window.addEventListener('resize', onResize, { passive: true });

  /* ------------------------------------------------- run only when visible */

  if ('IntersectionObserver' in window) {
    new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !document.hidden) start();
        else stop();
      });
    }, { threshold: 0 }).observe(hero);
  } else {
    start();
  }

  document.addEventListener('visibilitychange', function () {
    if (document.hidden) stop();
    else if (hero.getBoundingClientRect().bottom > 0) start();
  });

  // Rendering can survive a lost GPU context; failing loudly here helps nobody.
  canvas.addEventListener('webglcontextlost', function (ev) {
    ev.preventDefault();
    stop();
    canvas.classList.remove('is-ready');
  });
  canvas.addEventListener('webglcontextrestored', function () {
    canvas.classList.add('is-ready');
    start();
  });

  // Paint one frame before fading in, so the canvas never flashes empty.
  linkNearNodes();
  renderer.render(scene, camera);
  canvas.classList.add('is-ready');
  start();
}

/** Soft round sprite for the nodes — a plain square point looks synthetic. */
function makeDotTexture(THREE) {
  const size = 64;
  const c = document.createElement('canvas');
  c.width = c.height = size;

  const ctx = c.getContext('2d');
  const g = ctx.createRadialGradient(size / 2, size / 2, 0, size / 2, size / 2, size / 2);
  g.addColorStop(0, 'rgba(255,255,255,1)');
  g.addColorStop(0.35, 'rgba(255,255,255,0.75)');
  g.addColorStop(1, 'rgba(255,255,255,0)');

  ctx.fillStyle = g;
  ctx.fillRect(0, 0, size, size);

  const tex = new THREE.CanvasTexture(c);
  tex.colorSpace = THREE.SRGBColorSpace;
  return tex;
}
