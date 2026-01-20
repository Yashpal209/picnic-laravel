// Video Feed Swiper Initialization
document.addEventListener('DOMContentLoaded', function() {
    const videoSwiper = new Swiper('.videoSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 40,
            }
        }
    });

    // Stop autoplay when any video starts playing
    const videoIframes = document.querySelectorAll('.videoSwiper iframe');
    
    videoIframes.forEach(function(iframe) {
        // Listen for play events from YouTube iframe
        iframe.addEventListener('load', function() {
            // Add YouTube API to detect video play
            const player = iframe.contentWindow;
            
            iframe.addEventListener('click', function() {
                videoSwiper.autoplay.stop();
            });
        });
    });

    // Stop autoplay on any interaction with video cards (Desktop & Mobile)
    const videoCards = document.querySelectorAll('.video-card');
    videoCards.forEach(function(card) {
        // Desktop: mouseenter
        card.addEventListener('mouseenter', function() {
            videoSwiper.autoplay.stop();
        });
        
        // Mobile: touchstart
        card.addEventListener('touchstart', function() {
            videoSwiper.autoplay.stop();
        });
        
        // Mobile & Desktop: click on video
        card.addEventListener('click', function() {
            videoSwiper.autoplay.stop();
        });
    });

    // Resume autoplay when leaving the swiper area (Desktop & Mobile)
    const swiperContainer = document.querySelector('.videoSwiper');
    if (swiperContainer) {
        // Desktop: mouseleave
        swiperContainer.addEventListener('mouseleave', function() {
            setTimeout(function() {
                videoSwiper.autoplay.start();
            }, 3000);
        });
        
        // Mobile: touchend outside video area
        document.addEventListener('touchend', function(e) {
            if (!swiperContainer.contains(e.target)) {
                setTimeout(function() {
                    videoSwiper.autoplay.start();
                }, 3000);
            }
        });
    }
});
