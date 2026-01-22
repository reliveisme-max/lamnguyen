(() => {
    'use strict';

    const body = document.body;

    const toggleOffcanvas = (targetId, shouldOpen) => {
        const offcanvas = document.querySelector(targetId);
        if (!offcanvas) {
            return;
        }

        const isOpen = shouldOpen ?? !offcanvas.classList.contains('is-open');
        offcanvas.classList.toggle('is-open', isOpen);
        body.classList.toggle('no-scroll', isOpen);
    };

    document.addEventListener('click', (event) => {
        const toggle = event.target.closest('[data-offcanvas-target]');
        if (toggle) {
            event.preventDefault();
            const targetId = toggle.getAttribute('data-offcanvas-target');
            toggleOffcanvas(targetId, true);
            toggle.setAttribute('aria-expanded', 'true');
            return;
        }

        const closeBtn = event.target.closest('[data-offcanvas-close]');
        if (closeBtn) {
            event.preventDefault();
            const targetId = closeBtn.getAttribute('data-offcanvas-close');
            toggleOffcanvas(targetId, false);
            return;
        }

        const backdrop = event.target.closest('.offcanvas-backdrop');
        if (backdrop) {
            const offcanvas = backdrop.closest('.offcanvas');
            if (offcanvas) {
                toggleOffcanvas(`#${offcanvas.id}`, false);
            }
        }

        const backToTop = event.target.closest('[data-back-to-top]');
        if (backToTop) {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });

    const stickyButtons = document.querySelectorAll('.sticky-button');
    stickyButtons.forEach((button) => {
        button.style.opacity = '0';
        button.style.visibility = 'hidden';
        button.dataset.animated = 'false';
        button.dataset.fadedIn = 'false';
    });

    let lastScrollTop = window.scrollY;
    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const isScrollingDown = scrollTop > lastScrollTop;
        lastScrollTop = scrollTop;

        if (scrollTop > 30) {
            stickyButtons.forEach((button, index) => {
                if (button.dataset.animated === 'false') {
                    window.setTimeout(() => {
                        button.style.visibility = 'visible';
                        button.style.opacity = '1';

                        if (button.dataset.fadedIn === 'false') {
                            button.classList.add('animated', 'stickyButton-fadeInRight');
                            button.dataset.fadedIn = 'true';
                        }

                        button.dataset.animated = 'true';
                        button.addEventListener(
                            'animationend',
                            () => {
                                button.classList.remove('stickyButton-fadeInRight');
                            },
                            { once: true }
                        );
                    }, index * 300);
                }
            });
        } else {
            stickyButtons.forEach((button) => {
                if (button.dataset.animated === 'true' && !isScrollingDown) {
                    button.style.opacity = '0';
                    button.style.visibility = 'hidden';
                    button.dataset.animated = 'false';
                    button.dataset.fadedIn = 'false';
                }
            });
        }
    });
})();