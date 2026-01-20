const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
let current = 0;
let autoSlide;

// Check if slider elements exist on this page
if (slides.length > 0 && dots.length > 0) {
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            dots[i].classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
                dots[i].classList.add('active');
            }
        });

        const activeSlide = slides[index];
        const text = activeSlide.querySelector('.text-content');
        const img = activeSlide.querySelector('img');

        // Animate text and image
        gsap.fromTo(text, { opacity: 0, x: -100 }, { opacity: 1, x: 0, duration: 1, ease: "power3.out" });
        gsap.fromTo(img, { opacity: 0, scale: 0.8, x: 100 }, { opacity: 1, scale: 1, x: 0, duration: 1.2, ease: "back.out(1.7)" });
    }

    function autoPlay() {
        autoSlide = setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 6000);
    }

    // Dots navigation click
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            clearInterval(autoSlide);
            current = parseInt(dot.dataset.index);
            showSlide(current);
            autoPlay();
        });
    });

    // Initialize
    showSlide(current);
    autoPlay();
}
