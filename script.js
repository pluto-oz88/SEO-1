/**
 * SEO Demo — Script
 * Small enhancements that don't affect SEO crawling.
 */
(function () {
    'use strict';

    // 1. Smooth-scroll for in-page anchor links (with reduced-motion support).
    const prefersReducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (event) {
            const targetId = link.getAttribute('href');
            if (targetId === '#' || targetId.length < 2) return;

            const target = document.querySelector(targetId);
            if (!target) return;

            event.preventDefault();
            target.scrollIntoView({
                behavior: prefersReducedMotion ? 'auto' : 'smooth',
                block: 'start'
            });

            // Update URL hash without jumping.
            if (history.pushState) {
                history.pushState(null, '', targetId);
            }
        });
    });

    // 2. Mark the active navigation item based on the current section.
    const navLinks = document.querySelectorAll('.main-nav a');
    const sections = Array.from(document.querySelectorAll('main section[id]'));

    if ('IntersectionObserver' in window && sections.length) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;
                        navLinks.forEach(function (link) {
                            const isActive = link.getAttribute('href') === '#' + id;
                            if (isActive) {
                                link.setAttribute('aria-current', 'page');
                            } else {
                                link.removeAttribute('aria-current');
                            }
                        });
                    }
                });
            },
            { rootMargin: '-40% 0px -55% 0px', threshold: 0 }
        );

        sections.forEach(function (section) {
            observer.observe(section);
        });
    }

    // 3. Lazy-load fallback: set loading="lazy" on images below the fold
    //    (browsers without native support simply load them normally).
    document.querySelectorAll('img:not([loading])').forEach(function (img) {
        img.setAttribute('loading', 'lazy');
    });
})();