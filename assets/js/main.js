/* Links Boots — interactions: nav, reveals, counters, accordions. */
(function () {
  'use strict';

  /* ---------------------------------------------------------- mobile nav */
  var toggle = document.getElementById('navToggle');
  var menu   = document.getElementById('navMenu');

  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      var open = document.body.classList.toggle('nav-open');
      toggle.setAttribute('aria-expanded', String(open));
    });

    // On mobile the mega-menu parent becomes an expandable accordion row.
    menu.querySelectorAll('.has-mega > .nav-link').forEach(function (link) {
      link.addEventListener('click', function (ev) {
        if (window.innerWidth > 960) return;
        ev.preventDefault();
        link.parentElement.classList.toggle('is-open');
      });
    });

    menu.querySelectorAll('a:not(.has-mega > .nav-link)').forEach(function (a) {
      a.addEventListener('click', function () {
        document.body.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ------------------------------------------- mega menu: hover intent */
  // A short close delay so a diagonal mouse path into the panel doesn't drop it.
  document.querySelectorAll('.has-mega').forEach(function (item) {
    var timer;
    item.addEventListener('mouseenter', function () {
      if (window.innerWidth <= 960) return;
      clearTimeout(timer);
      item.classList.add('is-hover');
    });
    item.addEventListener('mouseleave', function () {
      timer = setTimeout(function () { item.classList.remove('is-hover'); }, 180);
    });
    // Choosing an option closes the panel straight away.
    item.querySelectorAll('.mega a').forEach(function (a) {
      a.addEventListener('click', function () { item.classList.remove('is-hover'); });
    });
  });

  /* ------------------------------------------------------- sticky shadow */
  var header = document.getElementById('siteHeader');
  if (header) {
    var onScroll = function () {
      header.classList.toggle('is-stuck', window.scrollY > 8);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ------------------------------------------------------------- reveals */
  var reveals = document.querySelectorAll('.reveal');
  if (!('IntersectionObserver' in window)) {
    reveals.forEach(function (el) { el.classList.add('in'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function (el) { io.observe(el); });
  }

  /* ------------------------------------------------- progress bar fills */
  var bars = document.querySelectorAll('.progress i[data-fill]');
  if (bars.length) {
    var barObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.style.width = entry.target.dataset.fill + '%';
        barObs.unobserve(entry.target);
      });
    }, { threshold: 0.4 });
    bars.forEach(function (b) { barObs.observe(b); });
  }

  /* ------------------------------------------------------ number counters */
  var counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var run = function (el) {
      var target = parseFloat(el.dataset.count) || 0;
      var suffix = el.dataset.suffix || '';
      var decimals = (String(el.dataset.count).split('.')[1] || '').length;

      if (reduce) {
        el.textContent = target.toFixed(decimals) + suffix;
        return;
      }

      var start = null;
      var dur = 1600;
      var step = function (ts) {
        if (start === null) start = ts;
        var p = Math.min((ts - start) / dur, 1);
        var eased = 1 - Math.pow(1 - p, 3);
        el.textContent = (target * eased).toFixed(decimals) + suffix;
        if (p < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };

    var cObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        run(entry.target);
        cObs.unobserve(entry.target);
      });
    }, { threshold: 0.5 });
    counters.forEach(function (c) { cObs.observe(c); });
  }

  /* ----------------------------------------------------------- accordions */
  document.querySelectorAll('.faq-q').forEach(function (btn) {
    var item = btn.closest('.faq-item');
    var panel = item.querySelector('.faq-a');

    var setHeight = function () {
      panel.style.maxHeight = item.classList.contains('is-open') ? panel.scrollHeight + 'px' : '0px';
    };

    setHeight();
    btn.addEventListener('click', function () {
      // One panel open at a time, per accordion group.
      var group = item.parentElement;
      group.querySelectorAll('.faq-item.is-open').forEach(function (other) {
        if (other === item) return;
        other.classList.remove('is-open');
        other.querySelector('.faq-q').setAttribute('aria-expanded', 'false');
        other.querySelector('.faq-a').style.maxHeight = '0px';
      });

      var open = item.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', String(open));
      setHeight();
    });

    window.addEventListener('resize', setHeight);
  });
})();
