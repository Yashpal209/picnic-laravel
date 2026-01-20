gsap.registerPlugin(ScrollTrigger);

// --- INTRO ANIMATION ---
const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

// Header logo fade in
if (document.querySelector('.logo')) {
    tl.from(".logo", { opacity: 0, x: -20, duration: 0.8 }, 0);
}

// Navigation items
// if (document.querySelector('nav a')) {
//     tl.from("nav a", {
//         y: -30,
//         opacity: 0,
//         stagger: 0.1,
//         duration: 0.6
//     }, "-=0.4");
// }

// Contact info
if (document.querySelector(".text-right.text-sm")) {
    tl.from(".text-right.text-sm", {
        y: -20,
        opacity: 0,
        duration: 0.6
    }, "-=0.4");
}

// Mobile menu button
if (document.querySelector("#mobile-menu-button")) {
    tl.from("#mobile-menu-button", {
        scale: 0,
        rotation: 180,
        duration: 0.6
    }, "-=0.4");
}

// --- SCROLL ANIMATIONS ---

// Scrolling banner animation
const scrollingBanner = document.querySelector('.scrolling-banner');
if (scrollingBanner) {
    gsap.from(".scrolling-banner", {
        scrollTrigger: {
            trigger: ".scrolling-banner",
            start: "top 90%",
            toggleActions: "play none none none"
        },
        y: 50,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)"
    });
}

// About section animation - Check for actual elements being animated
if (document.querySelector(".flex.bg-white.items-center .grid.md\\:grid-cols-2 .text-4xl")) {
    gsap.from(".flex.bg-white.items-center .grid.md\\:grid-cols-2 .text-4xl", {
        scrollTrigger: {
            trigger: ".flex.bg-white.items-center",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        x: -100,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });
}

if (document.querySelector(".flex.bg-white.items-center .grid.md\\:grid-cols-2 .inline-block")) {
    gsap.from(".flex.bg-white.items-center .grid.md\\:grid-cols-2 .inline-block", {
        scrollTrigger: {
            trigger: ".flex.bg-white.items-center",
            start: "top 75%",
            toggleActions: "play none none none"
        },
        scale: 0,
        rotation: -180,
        duration: 0.8,
        ease: "back.out(1.7)"
    }, "-=0.5");
}

if (document.querySelector(".flex.bg-white.items-center .grid.md\\:grid-cols-2 p")) {
    gsap.from(".flex.bg-white.items-center .grid.md\\:grid-cols-2 p", {
        scrollTrigger: {
            trigger: ".flex.bg-white.items-center",
            start: "top 70%",
            toggleActions: "play none none none"
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "-=0.3");
}

if (document.querySelector(".flex.bg-white.items-center .grid.md\\:grid-cols-2 .text-2xl")) {
    gsap.from(".flex.bg-white.items-center .grid.md\\:grid-cols-2 .text-2xl", {
        scrollTrigger: {
            trigger: ".flex.bg-white.items-center",
            start: "top 65%",
            toggleActions: "play none none none"
        },
        x: 100,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out"
    }, "-=0.3");
}

if (document.querySelector(".flex.bg-white.items-center .grid.md\\:grid-cols-2 img")) {
    gsap.from(".flex.bg-white.items-center .grid.md\\:grid-cols-2 img", {
        scrollTrigger: {
            trigger: ".flex.bg-white.items-center",
            start: "top 60%",
            toggleActions: "play none none none"
        },
        scale: 0.5,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)"
    }, "-=0.5");
}

// Flavors section animations - Check for actual elements being animated
if (document.querySelector(".py-16.px-6.md\\:px-12.bg-white.text-center h2")) {
    gsap.from(".py-16.px-6.md\\:px-12.bg-white.text-center h2", {
        scrollTrigger: {
            trigger: ".py-16.px-6.md\\:px-12.bg-white.text-center",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        y: 80,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });
}

if (document.querySelector(".py-16.px-6.md\\:px-12.bg-white.text-center .group")) {
    gsap.from(".py-16.px-6.md\\:px-12.bg-white.text-center .group", {
        scrollTrigger: {
            trigger: ".py-16.px-6.md\\:px-12.bg-white.text-center",
            start: "top 60%",
            toggleActions: "play none none none"
        },
        y: 100,
        opacity: 0,
        stagger: 0.1,
        duration: 0.8,
        ease: "back.out(1.7)"
    });
}

// OGs section animation - Check for actual elements being animated, not just container
if (document.querySelector(".ogs-section h2")) {
    gsap.from(".ogs-section h2", {
        scrollTrigger: {
            trigger: ".ogs-section",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        scale: 0.5,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)"
    });
}

if (document.querySelector(".ogs-section .w-24")) {
    gsap.from(".ogs-section .w-24", {
        scrollTrigger: {
            trigger: ".ogs-section",
            start: "top 75%",
            toggleActions: "play none none none"
        },
        width: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "-=0.5");
}

if (document.querySelector(".ogs-section .grid.grid-cols-1 .relative")) {
    gsap.from(".ogs-section .grid.grid-cols-1 .relative", {
        scrollTrigger: {
            trigger: ".ogs-section .grid.grid-cols-1",
            start: "top 60%",
            toggleActions: "play none none none"
        },
        x: (index) => index % 2 === 0 ? -200 : 200,
        opacity: 0,
        stagger: 0.2,
        duration: 1,
        ease: "power3.out"
    });
}



// Testimonials section - Check for actual elements being animated
if (document.querySelector(".py-16.px-6.md\\:px-12.text-center .text-4xl")) {
    gsap.from(".py-16.px-6.md\\:px-12.text-center .text-4xl", {
        scrollTrigger: {
            trigger: ".py-16.px-6.md\\:px-12.text-center",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        scale: 0.3,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)"
    });
}

if (document.querySelector(".py-16.px-6.md\\:px-12.text-center p")) {
    gsap.from(".py-16.px-6.md\\:px-12.text-center p", {
        scrollTrigger: {
            trigger: ".py-16.px-6.md\\:px-12.text-center",
            start: "top 75%",
            toggleActions: "play none none none"
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "-=0.5");
}

// Delivery section - Check for actual elements being animated
if (document.querySelector(".delivery-section .section-title")) {
    gsap.from(".delivery-section .section-title", {
        scrollTrigger: {
            trigger: ".delivery-section",
            start: "top 80%",
            toggleActions: "play none none none"
        },
        scale: 0.5,
        opacity: 0,
        duration: 1,
        ease: "back.out(1.7)"
    });
}

if (document.querySelector(".delivery-section .underline")) {
    gsap.from(".delivery-section .underline", {
        scrollTrigger: {
            trigger: ".delivery-section",
            start: "top 75%",
            toggleActions: "play none none none"
        },
        width: 0,
        duration: 0.8,
        ease: "power2.out"
    }, "-=0.5");
}

if (document.querySelector(".delivery-section .grid > div")) {
    gsap.from(".delivery-section .grid > div", {
        scrollTrigger: {
            trigger: ".delivery-section .grid",
            start: "top 60%",
            toggleActions: "play none none none"
        },
        y: 100,
        opacity: 0,
        stagger: 0.2,
        duration: 0.8,
        ease: "power3.out"
    });
}


// --- MOBILE MENU TOGGLE (Bootstrap Compatible) ---
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuButton && mobileMenu) {
    // Bootstrap handles the collapse automatically via data-bs-toggle
    // This is for additional GSAP animations if needed
    mobileMenu.addEventListener('show.bs.collapse', function () {
        gsap.fromTo(this,
            { opacity: 0 },
            { opacity: 1, duration: 0.3, ease: "power2.out" }
        );
    });

    mobileMenu.addEventListener('hide.bs.collapse', function () {
        gsap.to(this,
            { opacity: 0, duration: 0.3, ease: "power2.out" }
        );
    });
}

// --- INTERSECTION OBSERVER FOR ADDITIONAL ANIMATIONS ---
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
        }
    });
}, observerOptions);

// Observe elements with GSAP classes
document.querySelectorAll('.gsap-reveal, .gsap-fade-in, .gsap-slide-left, .gsap-slide-right, .gsap-scale, .gsap-stagger').forEach(el => {
    observer.observe(el);
});

// --- PARALLAX EFFECT FOR BACKGROUND ---
gsap.to("body", {
    backgroundPosition: "50% 100px",
    ease: "none",
    scrollTrigger: {
        trigger: "body",
        start: "top bottom",
        end: "bottom top",
        scrub: true
    }
});

// --- SMOOTH SCROLLING ---
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        // Skip if href is just "#" to avoid invalid selector error
        if (href === '#') {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
            return;
        }

        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});
