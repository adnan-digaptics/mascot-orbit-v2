document.addEventListener('DOMContentLoaded', () => {
  const revealElements = document.querySelectorAll('.reveal');
  const gsap = window.gsap;
  const ScrollTrigger = window.ScrollTrigger;
  const staggerGroups = '.hero-copy, .service-detail-hero > .reveal, .section-head, .grid, .portfolio-grid, .process-grid, .deliverables, .package-grid, .stats, .mascot-grid, .workflow, .team-grid, .culture-grid, .logo-strip, .cta-band, .faq';

  const showReveal = element => element.classList.add('in-view');

  const runCounters = stats => {
    if (stats.dataset.counted === 'true') return;
    stats.dataset.counted = 'true';
    stats.querySelectorAll('.stat b').forEach((counter, index) => {
      const target = Number(counter.dataset.count || counter.textContent.replace(/[^\d]/g, ''));
      const suffix = counter.dataset.suffix || '';
      if (!target) return;
      const value = { current: 0 };
      counter.textContent = `0${suffix}`;
      gsap.to(value, {
        current: target,
        duration: 1.8,
        delay: index * 0.12,
        ease: 'power3.out',
        onUpdate: () => {
          counter.textContent = `${Math.round(value.current).toLocaleString()}${suffix}`;
        }
      });
    });
  };

  if (!gsap) {
    revealElements.forEach(showReveal);
  } else {
    document.body.classList.add('gsap-ready');
    if (ScrollTrigger) gsap.registerPlugin(ScrollTrigger);

    const hero = document.querySelector('.hero');
    if (hero) {
      hero.querySelectorAll('.reveal').forEach(element => {
        gsap.set(element, { autoAlpha: 1, y: 0 });
        showReveal(element);
      });
      const intro = gsap.timeline({ defaults: { ease: 'power3.out' } });
      const copyBits = hero.querySelectorAll('.hero-copy > *');
      if (copyBits.length) {
        intro.fromTo(copyBits, { autoAlpha: 0, y: 26 }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.85,
          stagger: 0.08
        });
      }
      const art = hero.querySelector('.hero-art');
      if (art) {
        intro.fromTo(art, { autoAlpha: 0, y: 18 }, {
          autoAlpha: 1,
          y: 0,
          duration: 1
        }, 0.12);
      }
      const scribble = hero.querySelector('.hero-scribble');
      const badge = hero.querySelector('.hero-badge');
      if (scribble) {
        intro.fromTo(scribble, { autoAlpha: 0, y: -8, rotation: -10 }, {
          autoAlpha: 1,
          y: 0,
          rotation: -4,
          duration: 0.6,
          ease: 'back.out(1.6)'
        }, 0.45);
      }
      if (badge) {
        intro.fromTo(badge, { autoAlpha: 0, y: 12 }, {
          autoAlpha: 1,
          y: 0,
          rotation: -4,
          duration: 0.55,
          ease: 'back.out(1.4)'
        }, 0.55);
      }
    }

    revealElements.forEach(element => {
      if (element.closest('.hero')) return;
      const children = element.matches(staggerGroups) ? [...element.children] : [];
      const trigger = {
        trigger: element,
        start: 'top 88%',
        once: true,
        onEnter: () => showReveal(element)
      };

      if (children.length > 1) {
        gsap.set(element, { autoAlpha: 1, y: 0 });
        gsap.fromTo(children, { autoAlpha: 0, y: 22 }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.72,
          stagger: 0.08,
          ease: 'power3.out',
          scrollTrigger: trigger
        });
      } else {
        gsap.fromTo(element, { autoAlpha: 0, y: 24 }, {
          autoAlpha: 1,
          y: 0,
          duration: 0.75,
          ease: 'power3.out',
          scrollTrigger: trigger
        });
      }
    });

    if (ScrollTrigger) {
      document.querySelectorAll('.stats').forEach(stats => {
        ScrollTrigger.create({
          trigger: stats,
          start: 'top 85%',
          once: true,
          onEnter: () => runCounters(stats)
        });
      });
    } else {
      document.querySelectorAll('.stats').forEach(runCounters);
    }
  }

  document.querySelectorAll('form:not(#project-brief-form)').forEach(form => {
    form.addEventListener('submit', event => event.preventDefault());
  });

  const brief = document.querySelector('#project-brief-form');
  if (brief) {
    const status = brief.querySelector('.form-status');
    brief.addEventListener('submit', event => {
      event.preventDefault();
      const email = brief.querySelector('[type="email"]');
      let valid = true;

      brief.querySelectorAll('[required]').forEach(field => {
        const filled = field.type === 'checkbox' ? field.checked : field.value.trim() !== '';
        field.closest('label')?.classList.toggle('is-invalid', !filled);
        if (!filled) valid = false;
      });

      if (email && email.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim())) {
        email.closest('label')?.classList.add('is-invalid');
        valid = false;
      }

      status.hidden = false;
      if (!valid) {
        status.className = 'form-status is-error';
        status.textContent = 'Add the required details so we can reply with a useful next step.';
        brief.querySelector('.is-invalid input, .is-invalid select, .is-invalid textarea')?.focus();
        return;
      }

      status.className = 'form-status is-success';
      status.textContent = 'Brief received. We will reply within one business day with a recommended scope and timeline.';
      brief.reset();
      brief.querySelectorAll('.is-invalid').forEach(label => label.classList.remove('is-invalid'));
    });
  }

  document.querySelectorAll('.filters').forEach(filterGroup => {
    const buttons = filterGroup.querySelectorAll('[data-filter]');
    const grid = filterGroup.nextElementSibling;
    const cards = grid?.querySelectorAll('[data-category]') ?? [];
    const emptyState = grid?.nextElementSibling?.matches('.filter-empty')
      ? grid.nextElementSibling
      : null;

    buttons.forEach(button => button.addEventListener('click', () => {
      const filter = button.dataset.filter;
      let visibleCards = 0;

      buttons.forEach(item => {
        const isActive = item === button;
        item.classList.toggle('active', isActive);
        item.setAttribute('aria-pressed', String(isActive));
      });

      cards.forEach(card => {
        const isVisible = filter === 'all' || card.dataset.category === filter;
        card.hidden = !isVisible;
        if (isVisible) visibleCards += 1;
      });

      if (emptyState) emptyState.hidden = visibleCards > 0;
      if (grid && emptyState) grid.hidden = visibleCards === 0;
    }));
  });
});
