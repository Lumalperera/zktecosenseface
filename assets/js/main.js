(function () {
    'use strict';

    const body = document.body;
    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const modalTriggers = document.querySelectorAll('[data-modal-target]');
    const modals = document.querySelectorAll('.modal');
    let activeModal = null;
    let lastFocused = null;

    function initHero() {
        if (typeof Swiper === 'undefined' || !document.querySelector('.hero-swiper')) {
            return;
        }

        new Swiper('.hero-swiper', {
            loop: true,
            speed: 850,
            effect: 'slide',
            autoplay: {
                delay: 6200,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.hero-next',
                prevEl: '.hero-prev',
            },
            keyboard: {
                enabled: true,
            },
        });
    }

    function initMobileMenu() {
        if (!menuToggle || !mobileMenu) {
            return;
        }

        menuToggle.addEventListener('click', function () {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            menuToggle.setAttribute('aria-expanded', String(!isOpen));
        });

        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    function openModal(modal) {
        if (!modal) {
            return;
        }

        lastFocused = document.activeElement;
        activeModal = modal;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        body.style.overflow = 'hidden';

        const panel = modal.querySelector('.modal-panel');
        const firstInput = modal.querySelector('input, select, textarea, button');

        if (typeof gsap !== 'undefined') {
            gsap.fromTo(panel, { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: 0.25, ease: 'power2.out' });
        }

        setTimeout(function () {
            if (firstInput) {
                firstInput.focus();
            }
        }, 40);
    }

    function closeModal(modal) {
        const target = modal || activeModal;

        if (!target) {
            return;
        }

        function finishClose() {
            target.classList.remove('is-open');
            target.setAttribute('aria-hidden', 'true');
            body.style.overflow = '';
            activeModal = null;

            if (lastFocused && typeof lastFocused.focus === 'function') {
                lastFocused.focus();
            }
        }

        const panel = target.querySelector('.modal-panel');
        if (typeof gsap !== 'undefined' && panel) {
            gsap.to(panel, { y: 18, opacity: 0, duration: 0.18, ease: 'power2.in', onComplete: finishClose });
        } else {
            finishClose();
        }
    }

    function initModals() {
        modalTriggers.forEach(function (trigger) {
            trigger.addEventListener('click', function () {
                const modal = document.getElementById(trigger.getAttribute('data-modal-target'));
                openModal(modal);
            });
        });

        modals.forEach(function (modal) {
            modal.querySelectorAll('[data-modal-close]').forEach(function (closeButton) {
                closeButton.addEventListener('click', function () {
                    closeModal(modal);
                });
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && activeModal) {
                closeModal(activeModal);
            }
        });
    }

    function initForms() {
        document.querySelectorAll('[data-form]').forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();

                const success = form.querySelector('.form-success');
                if (success) {
                    success.classList.remove('hidden');
                }

                form.reset();
            });
        });
    }

    function initImageFallbacks() {
        document.querySelectorAll('img').forEach(function (image) {
            image.addEventListener('error', function () {
                const container = image.closest('.product-image, .device-image, .scan-card-inner');
                if (container) {
                    container.classList.add('is-missing');
                }
            });

            if (image.complete && image.naturalWidth === 0) {
                image.dispatchEvent(new Event('error'));
            }
        });
    }

    function initSmoothAnchors() {
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener('click', function (event) {
                const hash = link.getAttribute('href');

                if (!hash || hash === '#') {
                    return;
                }

                const target = document.querySelector(hash);

                if (!target) {
                    return;
                }

                event.preventDefault();

                const header = document.querySelector('header');
                const headerOffset = header ? header.offsetHeight + 16 : 0;
                const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: Math.max(targetTop, 0),
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                });

                window.history.pushState(null, '', hash);
            });
        });
    }

    function initCustomCursor() {
        const canUseCustomCursor = window.matchMedia('(pointer: fine)').matches &&
            !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (!canUseCustomCursor) {
            return;
        }

        const dot = document.createElement('span');
        const ring = document.createElement('span');
        const interactiveSelector = 'a, button, summary, [role="button"], .product-card, .benefit-card, .industry-card, .solution-card, .comparison-row';
        const formSelector = 'input, textarea, select, label';

        dot.className = 'custom-cursor-dot';
        ring.className = 'custom-cursor-ring';
        dot.setAttribute('aria-hidden', 'true');
        ring.setAttribute('aria-hidden', 'true');
        body.append(dot, ring);
        body.classList.add('custom-cursor-enabled');

        let mouseX = window.innerWidth / 2;
        let mouseY = window.innerHeight / 2;
        let ringX = mouseX;
        let ringY = mouseY;

        function render() {
            ringX += (mouseX - ringX) * 0.18;
            ringY += (mouseY - ringY) * 0.18;

            dot.style.transform = 'translate3d(' + mouseX + 'px, ' + mouseY + 'px, 0) translate(-50%, -50%)';
            ring.style.transform = 'translate3d(' + ringX + 'px, ' + ringY + 'px, 0) translate(-50%, -50%)';

            window.requestAnimationFrame(render);
        }

        document.addEventListener('pointermove', function (event) {
            mouseX = event.clientX;
            mouseY = event.clientY;
            body.classList.add('custom-cursor-visible');

            if (event.target.closest(formSelector)) {
                body.classList.remove('custom-cursor-hover');
                return;
            }

            body.classList.toggle('custom-cursor-hover', Boolean(event.target.closest(interactiveSelector)));
        });

        document.addEventListener('pointerleave', function () {
            body.classList.remove('custom-cursor-visible', 'custom-cursor-hover');
        });

        render();
    }

    document.addEventListener('DOMContentLoaded', function () {
        initHero();
        initMobileMenu();
        initModals();
        initForms();
        initImageFallbacks();
        initSmoothAnchors();
        initCustomCursor();
    });
})();
