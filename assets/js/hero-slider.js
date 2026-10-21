/**
 * Links Boots — hero carousel.
 *
 * Deliberately dependency-free and independent of the three.js background, so a
 * failure in one cannot take out the other. Follows the WAI-ARIA carousel
 * pattern: labelled slides, a live region, real pause control, keyboard and
 * touch input, and no focusable elements inside off-screen slides.
 */
(function () {
  'use strict';

  var slider = document.getElementById('heroSlider');
  var track  = document.getElementById('heroTrack');
  if (!slider || !track) return;

  var slides = Array.prototype.slice.call(track.children);
  if (slides.length < 2) return;

  var dots      = Array.prototype.slice.call(slider.querySelectorAll('[data-hero-go]'));
  var prevBtn   = slider.querySelector('[data-hero-prev]');
  var nextBtn   = slider.querySelector('[data-hero-next]');
  var toggleBtn = slider.querySelector('[data-hero-toggle]');

  var INTERVAL   = 7000;
  var reduce     = window.matchMedia('(prefers-reduced-motion: reduce)');
  var index      = 0;
  var timer      = null;
  var playing    = false;
  var userPaused = false;   // an explicit press of the pause button sticks

  var supportsInert = 'inert' in HTMLElement.prototype;

  var PAUSE_ICON = toggleBtn ? toggleBtn.innerHTML : '';
  var PLAY_ICON  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" '
                 + 'stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">'
                 + '<path d="M8 5.6v12.8a1 1 0 001.53.85l10-6.4a1 1 0 000-1.7l-10-6.4A1 1 0 008 5.6z" '
                 + 'fill="currentColor" stroke="none"/></svg>';

  /* ------------------------------------------------------------ rendering */

  function render() {
    track.style.transform = 'translateX(' + (-index * 100) + '%)';

    slides.forEach(function (slide, i) {
      var active = i === index;
      slide.setAttribute('aria-hidden', active ? 'false' : 'true');

      // Keep off-screen slides out of the tab order. Without this, tabbing from
      // the hero walks invisibly through two slides' worth of links.
      // `inert` does this properly where it exists; the tabindex juggling below
      // is the fallback for browsers that lack it.
      if (supportsInert) slide.inert = !active;

      slide.querySelectorAll('a,button,input,select,textarea').forEach(function (el) {
        if (active) {
          if (el.dataset.heroTabRestore !== undefined) {
            el.removeAttribute('tabindex');
            delete el.dataset.heroTabRestore;
          }
        } else if (!el.hasAttribute('tabindex')) {
          el.setAttribute('tabindex', '-1');
          el.dataset.heroTabRestore = '';
        }
      });
    });

    dots.forEach(function (dot, i) {
      if (i === index) dot.setAttribute('aria-current', 'true');
      else dot.removeAttribute('aria-current');
    });
  }

  function goTo(next) {
    var total = slides.length;
    index = ((next % total) + total) % total;   // wraps in both directions
    render();
  }

  var go = function (delta) { goTo(index + delta); };

  /* ------------------------------------------------------- autoplay control */

  function startAuto() {
    if (playing || userPaused || reduce.matches || slides.length < 2) return;
    playing = true;
    timer = window.setInterval(function () { go(1); }, INTERVAL);
    track.setAttribute('aria-live', 'off');
    syncToggle();
  }

  function stopAuto() {
    playing = false;
    if (timer) { window.clearInterval(timer); timer = null; }
    track.setAttribute('aria-live', 'polite');
    syncToggle();
  }

  function syncToggle() {
    if (!toggleBtn) return;
    toggleBtn.innerHTML = playing ? PAUSE_ICON : PLAY_ICON;
    toggleBtn.setAttribute('aria-label',
      playing ? 'Pause automatic slide rotation' : 'Start automatic slide rotation');
  }

  /* Restart the timer after a manual move so the new slide gets a full turn. */
  function nudge(delta) {
    go(delta);
    if (playing) { stopAuto(); playing = false; startAuto(); }
  }

  /* ---------------------------------------------------------------- events */

  if (prevBtn) prevBtn.addEventListener('click', function () { nudge(-1); });
  if (nextBtn) nextBtn.addEventListener('click', function () { nudge(1); });

  dots.forEach(function (dot) {
    dot.addEventListener('click', function () {
      goTo(parseInt(dot.dataset.heroGo, 10) || 0);
      if (playing) { stopAuto(); playing = false; startAuto(); }
    });
  });

  if (toggleBtn) {
    toggleBtn.addEventListener('click', function () {
      if (playing) { userPaused = true; stopAuto(); }
      else { userPaused = false; startAuto(); }
    });
  }

  // Hovering or focusing the carousel suspends rotation without clearing the
  // user's own play/pause choice.
  slider.addEventListener('mouseenter', function () { if (playing) stopAuto(); });
  slider.addEventListener('mouseleave', function () { startAuto(); });
  slider.addEventListener('focusin',  function () { if (playing) stopAuto(); });
  slider.addEventListener('focusout', function (ev) {
    if (!slider.contains(ev.relatedTarget)) startAuto();
  });

  // Arrow keys move between slides when focus is inside the carousel.
  slider.addEventListener('keydown', function (ev) {
    if (ev.key === 'ArrowLeft')       { ev.preventDefault(); nudge(-1); }
    else if (ev.key === 'ArrowRight') { ev.preventDefault(); nudge(1); }
  });

  // Touch / pen swipe. Uses pointer events so one code path covers everything.
  var startX = 0, startY = 0, tracking = false;

  slider.addEventListener('pointerdown', function (ev) {
    if (ev.pointerType === 'mouse') return;   // let mice click links normally
    tracking = true; startX = ev.clientX; startY = ev.clientY;
  }, { passive: true });

  slider.addEventListener('pointerup', function (ev) {
    if (!tracking) return;
    tracking = false;
    var dx = ev.clientX - startX;
    var dy = ev.clientY - startY;
    // Only act on a decisive horizontal swipe, so vertical scrolling still works.
    if (Math.abs(dx) > 45 && Math.abs(dx) > Math.abs(dy) * 1.5) nudge(dx < 0 ? 1 : -1);
  }, { passive: true });

  slider.addEventListener('pointercancel', function () { tracking = false; });

  // Do not rotate while the tab is in the background.
  document.addEventListener('visibilitychange', function () {
    if (document.hidden) { if (playing) stopAuto(); }
    else startAuto();
  });

  // Nor while the hero is scrolled out of view.
  if ('IntersectionObserver' in window) {
    new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) startAuto();
        else if (playing) stopAuto();
      });
    }, { threshold: 0.25 }).observe(slider);
  }

  // If the user turns on reduced motion mid-session, stop rotating.
  var onMotionChange = function () { if (reduce.matches) stopAuto(); else startAuto(); };
  if (reduce.addEventListener) reduce.addEventListener('change', onMotionChange);
  else if (reduce.addListener) reduce.addListener(onMotionChange);

  /* ------------------------------------------------------------------ init */

  render();
  syncToggle();
  startAuto();
})();
