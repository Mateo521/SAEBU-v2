/**
 * Inicializar todos los Swipers
 */
document.addEventListener('DOMContentLoaded', function () {

    // Hero Slider (si existe)
    const heroSwiper = document.querySelector('.hero-swiper');
    if (heroSwiper) {
        new Swiper('.hero-swiper', {
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
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
    }

    const gallerySwiper = document.querySelector('.gallery-swiper');
    if (gallerySwiper) {
        new Swiper('.gallery-swiper', {
            // Configuraciones base
            loop: false,
            spaceBetween: 0, // Eliminamos el espacio entre slides para un look más limpio
            slidesPerView: 1, // Forzamos 1 slide siempre
            centeredSlides: true,

            autoplay: {
                delay: 5000,
                disableOnInteraction: true, // Instagram suele detener el auto-play si el usuario interact
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Eliminamos los breakpoints para mantener la consistencia de 1 slide por pantalla
            effect: 'slide',
        });
    }

    // Testimonios Slider
    const testimoniosSwiper = document.querySelector('.testimonios-swiper');
    if (testimoniosSwiper) {
        new Swiper('.testimonios-swiper', {
            loop: true,
            autoplay: {
                delay: 6000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    // Noticias Slider
    const noticiasSwiper = document.querySelector('.noticias-swiper');
    if (noticiasSwiper) {
        new Swiper('.noticias-swiper', {
            loop: false,
            spaceBetween: 32,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            /*
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: false,
            },
            */
            navigation: {
                nextEl: '.swiper-button-next-noticias',
                prevEl: '.swiper-button-prev-noticias',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 32,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 32,
                },
            },
        });
    }


});
