(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        if (typeof gsap === 'undefined') {
            return;
        }

        if (typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
        }

        gsap.from('.swiper-slide-active .hero-copy > *', {
            y: 24,
            opacity: 0,
            duration: 0.75,
            stagger: 0.1,
            ease: 'power3.out',
        });

        gsap.to('.product-float', {
            y: -12,
            duration: 2.6,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
        });

        if (typeof ScrollTrigger === 'undefined') {
            return;
        }

        gsap.utils.toArray('.reveal-card').forEach(function (card) {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top 86%',
                },
                y: 28,
                opacity: 0,
                duration: 0.65,
                ease: 'power2.out',
            });
        });

        gsap.utils.toArray('.reveal-section').forEach(function (section) {
            gsap.from(section, {
                scrollTrigger: {
                    trigger: section,
                    start: 'top 88%',
                },
                y: 24,
                opacity: 0,
                duration: 0.65,
                ease: 'power2.out',
            });
        });

        const benefitSection = document.querySelector('.benefit-section');
        const benefitCards = gsap.utils.toArray('[data-benefit-card]');
        if (benefitSection && benefitCards.length) {
            const headingItems = benefitSection.querySelectorAll('.benefit-heading .eyebrow, .benefit-heading h2, .benefit-heading p');
            const benefitTl = gsap.timeline({
                scrollTrigger: {
                    trigger: benefitSection,
                    start: 'top 78%',
                    once: true,
                },
            });

            benefitTl
                .from(headingItems, {
                    y: 18,
                    opacity: 0,
                    duration: 0.52,
                    stagger: 0.08,
                    ease: 'power3.out',
                })
                .from(benefitCards, {
                    y: 28,
                    opacity: 0,
                    scale: 0.975,
                    duration: 0.58,
                    stagger: {
                        each: 0.055,
                        grid: [2, 4],
                        from: 'start',
                    },
                    ease: 'power3.out',
                    clearProps: 'opacity,transform',
                }, '-=0.12');
        }

        benefitCards.forEach(function (card) {
            const icon = card.querySelector('.benefit-icon');
            const title = card.querySelector('h3');
            const copy = card.querySelector('p');

            card.addEventListener('mouseenter', function () {
                gsap.to(card, {
                    y: -8,
                    scale: 1.015,
                    duration: 0.28,
                    ease: 'power2.out',
                });
                gsap.to(icon, {
                    y: -3,
                    scale: 1.12,
                    rotate: -4,
                    duration: 0.28,
                    ease: 'back.out(1.8)',
                });
                gsap.to([title, copy], {
                    x: 4,
                    duration: 0.24,
                    ease: 'power2.out',
                    stagger: 0.025,
                });
            });

            card.addEventListener('mouseleave', function () {
                gsap.to(card, {
                    y: 0,
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out',
                });
                gsap.to(icon, {
                    y: 0,
                    scale: 1,
                    rotate: 0,
                    duration: 0.3,
                    ease: 'power2.out',
                });
                gsap.to([title, copy], {
                    x: 0,
                    duration: 0.26,
                    ease: 'power2.out',
                });
            });
        });

        const industrySection = document.querySelector('.industry-section');
        if (industrySection) {
            const headingItems = industrySection.querySelectorAll('.industry-heading .eyebrow, .industry-heading h2, .industry-heading p');
            const cards = gsap.utils.toArray(industrySection.querySelectorAll('[data-industry-card]'));
            const scanLine = industrySection.querySelector('.industry-scan-line');

            const industryTl = gsap.timeline({
                scrollTrigger: {
                    trigger: industrySection,
                    start: 'top 72%',
                    once: true,
                },
            });

            industryTl
                .from(headingItems, {
                    y: 20,
                    opacity: 0,
                    duration: 0.58,
                    stagger: 0.09,
                    ease: 'power3.out',
                })
                .fromTo(scanLine, {
                    y: 8,
                    opacity: 0,
                }, {
                    y: industrySection.querySelector('.industry-grid-wrap').offsetHeight - 8,
                    opacity: 1,
                    duration: 0.9,
                    ease: 'power2.inOut',
                }, '-=0.12')
                .from(cards, {
                    y: 42,
                    opacity: 0,
                    scale: 0.965,
                    rotateX: -8,
                    duration: 0.72,
                    stagger: {
                        each: 0.075,
                        grid: [2, 4],
                        from: 'center',
                    },
                    ease: 'power3.out',
                    onStart: function () {
                        cards.forEach(function (card, index) {
                            setTimeout(function () {
                                card.classList.add('is-lit');
                                setTimeout(function () {
                                    card.classList.remove('is-lit');
                                }, 520);
                            }, index * 55);
                        });
                    },
                }, '-=0.58')
                .to(scanLine, {
                    opacity: 0,
                    duration: 0.28,
                    ease: 'power1.out',
                }, '-=0.2')
                .from(cards.map(function (card) {
                    return card.querySelector('.industry-icon');
                }), {
                    scale: 0.72,
                    opacity: 0,
                    duration: 0.42,
                    stagger: 0.045,
                    ease: 'back.out(1.7)',
                }, '-=0.62');

            cards.forEach(function (card) {
                card.addEventListener('mouseenter', function () {
                    gsap.to(card, { y: -6, duration: 0.22, ease: 'power2.out' });
                    gsap.to(card.querySelector('.industry-icon'), { scale: 1.08, duration: 0.22, ease: 'power2.out' });
                });

                card.addEventListener('mouseleave', function () {
                    gsap.to(card, { y: 0, duration: 0.28, ease: 'power2.out' });
                    gsap.to(card.querySelector('.industry-icon'), { scale: 1, duration: 0.28, ease: 'power2.out' });
                });
            });
        }

        const comparisonSection = document.querySelector('.comparison-section');
        if (comparisonSection) {
            const headingItems = comparisonSection.querySelectorAll('.comparison-heading .eyebrow, .comparison-heading h2, .comparison-heading p');
            const shell = comparisonSection.querySelector('.comparison-shell');
            const railSegments = comparisonSection.querySelectorAll('.comparison-rail span');
            const headerCells = comparisonSection.querySelectorAll('thead th');
            const rows = comparisonSection.querySelectorAll('.comparison-row');

            const comparisonTl = gsap.timeline({
                scrollTrigger: {
                    trigger: comparisonSection,
                    start: 'top 72%',
                    once: true,
                },
            });

            comparisonTl
                .from(headingItems, {
                    y: 20,
                    opacity: 0,
                    duration: 0.55,
                    stagger: 0.08,
                    ease: 'power3.out',
                })
                .from(shell, {
                    y: 34,
                    opacity: 0,
                    scale: 0.985,
                    duration: 0.72,
                    ease: 'power3.out',
                }, '-=0.12')
                .from(railSegments, {
                    scaleX: 0,
                    transformOrigin: 'left center',
                    duration: 0.5,
                    stagger: 0.08,
                    ease: 'power2.out',
                }, '-=0.48')
                .from(headerCells, {
                    y: -12,
                    opacity: 0,
                    duration: 0.38,
                    stagger: 0.045,
                    ease: 'power2.out',
                }, '-=0.32')
                .from(rows, {
                    x: -28,
                    opacity: 0,
                    duration: 0.56,
                    stagger: 0.105,
                    ease: 'power3.out',
                }, '-=0.08')
                .from(comparisonSection.querySelectorAll('.series-cell span'), {
                    scale: 0.86,
                    opacity: 0,
                    duration: 0.42,
                    stagger: 0.08,
                    ease: 'back.out(1.6)',
                }, '-=0.44');

            rows.forEach(function (row) {
                row.addEventListener('mouseenter', function () {
                    gsap.to(row.querySelector('.series-cell span'), {
                        scale: 1.04,
                        duration: 0.2,
                        ease: 'power2.out',
                    });
                });

                row.addEventListener('mouseleave', function () {
                    gsap.to(row.querySelector('.series-cell span'), {
                        scale: 1,
                        duration: 0.24,
                        ease: 'power2.out',
                    });
                });
            });
        }

        const solutionsSection = document.querySelector('.solutions-section');
        if (solutionsSection) {
            const headingItems = solutionsSection.querySelectorAll('.solutions-heading .eyebrow, .solutions-heading h2, .solutions-heading p');
            const pillars = solutionsSection.querySelectorAll('.solution-pillar');
            const solutionCards = gsap.utils.toArray(solutionsSection.querySelectorAll('[data-solution-card]'));

            const solutionsTl = gsap.timeline({
                scrollTrigger: {
                    trigger: solutionsSection,
                    start: 'top 72%',
                    once: true,
                },
            });

            solutionsTl
                .from(headingItems, {
                    y: 20,
                    opacity: 0,
                    duration: 0.55,
                    stagger: 0.08,
                    ease: 'power3.out',
                })
                .from(pillars, {
                    y: 24,
                    opacity: 0,
                    duration: 0.52,
                    stagger: 0.08,
                    ease: 'power3.out',
                }, '-=0.1')
                .from(solutionCards, {
                    y: 34,
                    opacity: 0,
                    scale: 0.975,
                    duration: 0.62,
                    stagger: {
                        each: 0.055,
                        grid: [2, 4],
                        from: 'center',
                    },
                    ease: 'power3.out',
                    clearProps: 'opacity,transform',
                }, '-=0.12');

            solutionCards.forEach(function (card) {
                const icon = card.querySelector('.solution-icon');
                const chips = card.querySelectorAll('.solution-outcomes span');

                card.addEventListener('mouseenter', function () {
                    gsap.to(card, { y: -8, scale: 1.012, duration: 0.26, ease: 'power2.out' });
                    gsap.to(icon, { scale: 1.1, rotate: -4, duration: 0.25, ease: 'back.out(1.8)' });
                    gsap.to(chips, { y: -2, duration: 0.22, stagger: 0.025, ease: 'power2.out' });
                });

                card.addEventListener('mouseleave', function () {
                    gsap.to(card, { y: 0, scale: 1, duration: 0.3, ease: 'power2.out' });
                    gsap.to(icon, { scale: 1, rotate: 0, duration: 0.3, ease: 'power2.out' });
                    gsap.to(chips, { y: 0, duration: 0.26, ease: 'power2.out' });
                });
            });
        }
    });
})();
