/**
 * GeM Consultancy — Main JavaScript
 * Handles: navbar scroll, mobile menu, scroll animations
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
  handleScroll(); // Run once on load

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

    // Close menu when a link is clicked
    navLinks.querySelectorAll('.navbar__link').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        hamburger.classList.remove('open');
        document.body.style.overflow = '';
      });
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navbar.contains(e.target) && navLinks.classList.contains('open')) {
        navLinks.classList.remove('open');
        hamburger.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }

  // ─── Scroll-triggered animations (IntersectionObserver) ─
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
      threshold: 0.12,
      rootMargin: '0px 0px -60px 0px',
    });

    animateElements.forEach(el => observer.observe(el));
  } else {
    // Fallback: show all elements immediately
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

    const duration = 1800;
    const start    = performance.now();

    const step = (now) => {
      const elapsed  = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease     = 1 - Math.pow(1 - progress, 3); // ease-out-cubic
      const current  = Math.round(ease * number * 10) / 10;
      el.textContent = (Number.isInteger(number) ? Math.round(current) : current) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    };

    requestAnimationFrame(step);
  }

  // ─── Smooth active nav highlight on scroll ────────────
  // (Light enhancement — main active state is set server-side via Blade)
  const sections = document.querySelectorAll('section[id]');
  if (sections.length) {
    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          document.querySelectorAll('.navbar__link').forEach(link => {
            link.classList.remove('active');
          });
        }
      });
    }, { threshold: 0.5 });
    sections.forEach(s => sectionObserver.observe(s));
  }

  // ─── Hero stat cards subtle parallax ─────────────────
  const hero = document.querySelector('.hero');
  if (hero) {
    window.addEventListener('scroll', () => {
      const scrollY   = window.scrollY;
      const heroCards = hero.querySelectorAll('.hero__stat-card');
      heroCards.forEach((card, i) => {
        const offset = scrollY * (0.08 + i * 0.04);
        card.style.transform = `translateY(${offset}px)`;
      });
    }, { passive: true });
  }

  // ─── Auto-dismiss alerts after 6 seconds ──────────────
  const alerts = document.querySelectorAll('.alert');
  alerts.forEach(alert => {
    setTimeout(() => {
      alert.style.transition = 'opacity 0.5s ease';
      alert.style.opacity = '0';
      setTimeout(() => alert.remove(), 500);
    }, 6000);
  });

});
