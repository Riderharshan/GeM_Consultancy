/**
 * GeM Consultancy — Main JavaScript (public/js/app.js)
 * Handles: navbar scroll, mobile menu, scroll animations, counter
 */

document.addEventListener('DOMContentLoaded', () => {

  // ─── Navbar scroll behaviour ──────────────────────────
  const navbar = document.getElementById('navbar');

  const handleScroll = () => {
    if (window.scrollY > 40) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // ─── Mobile hamburger menu ────────────────────────────
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');

  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('open');
      hamburger.classList.toggle('open', isOpen);
      hamburger.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    navLinks.querySelectorAll('.navbar__link').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        hamburger.classList.remove('open');
        document.body.style.overflow = '';
      });
    });

    document.addEventListener('click', (e) => {
      if (!navbar.contains(e.target) && navLinks.classList.contains('open')) {
        navLinks.classList.remove('open');
        hamburger.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }

  // ─── Scroll-triggered animations ─────────────────────
  const animateElements = document.querySelectorAll('[data-animate]');

  if (animateElements.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.10,
      rootMargin: '0px 0px -40px 0px',
    });

    animateElements.forEach(el => observer.observe(el));
  } else {
    // Fallback: show all immediately
    animateElements.forEach(el => el.classList.add('visible'));
  }

  // ─── Stats counter animation ──────────────────────────
  const statValues = document.querySelectorAll('.stats-strip__value, .about-stats-card__num');

  if (statValues.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    statValues.forEach(el => counterObserver.observe(el));
  }

  function animateCounter(el) {
    const text   = el.textContent.trim();
    const number = parseFloat(text.replace(/[^0-9.]/g, ''));
    const suffix = text.replace(/[0-9.]/g, '');

    if (isNaN(number)) return;

    const duration = 1600;
    const start    = performance.now();

    const step = (now) => {
      const elapsed  = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease     = 1 - Math.pow(1 - progress, 3);
      const current  = Math.round(ease * number * 10) / 10;
      el.textContent = (Number.isInteger(number) ? Math.round(current) : current) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    };

    requestAnimationFrame(step);
  }

  // ─── Hero stat cards subtle parallax ─────────────────
  const hero = document.querySelector('.hero');
  if (hero) {
    window.addEventListener('scroll', () => {
      const scrollY   = window.scrollY;
      const heroCards = hero.querySelectorAll('.hero__stat-card');
      heroCards.forEach((card, i) => {
        const offset = scrollY * (0.06 + i * 0.03);
        card.style.transform = `translateY(${offset}px)`;
      });
    }, { passive: true });
  }

  // ─── Auto-dismiss alerts ─────────────────────────────
  document.querySelectorAll('.alert').forEach(alert => {
    setTimeout(() => {
      alert.style.transition = 'opacity 0.5s ease';
      alert.style.opacity = '0';
      setTimeout(() => alert.remove(), 500);
    }, 6000);
  });

});
