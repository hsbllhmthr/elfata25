import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const statsSection = document.querySelector('.stats');

    if (statsSection) {
        const numberElements = statsSection.querySelectorAll('.stats__number');

        const animateCountUp = (el) => {
            const text = el.textContent;
            const target = parseInt(text.replace('+', ''), 10);
            const duration = 2000; // 2 seconds
            const frameDuration = 1000 / 60; // 60fps
            const totalFrames = Math.round(duration / frameDuration);
            let frame = 0;

            // To prevent re-animating if it's already animated
            if (el.dataset.animated) {
                return;
            }
            el.dataset.animated = 'true';

            const counter = setInterval(() => {
                frame++;
                const progress = frame / totalFrames;
                const currentCount = Math.round(target * progress);

                if (text.includes('+')) {
                    el.textContent = currentCount + '+';
                } else {
                    el.textContent = currentCount;
                }

                if (frame === totalFrames) {
                    clearInterval(counter);
                    // Ensure the final number is exact
                    el.textContent = text;
                }
            }, frameDuration);
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    numberElements.forEach(el => {
                        animateCountUp(el);
                    });
                    // Stop observing once the animation has been triggered
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5 // Trigger when 50% of the element is visible
        });

        observer.observe(statsSection);
    }

    // Responsive Navigation
    const hamburger = document.querySelector('.nav-hamburger');
    const navMenu = document.querySelector('.nav__menu-container');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('is-active');
            navMenu.classList.toggle('is-open');
        });
    }

    // Smooth scroll for "Lihat Program Kami" button
    const heroButton = document.querySelector('.hero-button');
    if (heroButton) {
        heroButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor jump
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    }
});

    const accordionHeaders = document.querySelectorAll('.info-item__header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const accordionItem = header.closest('.info-item');
            
            accordionItem.classList.toggle('info-item--expanded');
        });
    });
