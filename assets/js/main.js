(function ($) {
    'use strict';

    // Menu mobile toggle
    function initMobileMenu() {
        const menuToggle = '<button class="menu-toggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>';

        if (window.innerWidth <= 768) {
            if (!$('.menu-toggle').length) {
                $('.main-navigation').prepend(menuToggle);
            }
        }

        $(document).on('click', '.menu-toggle', function () {
            $(this).toggleClass('active');
            $('.nav-menu').slideToggle();
        });
    }

    // Smooth scroll
    $('a[href^="#"]').on('click', function (e) {
        const target = $(this.getAttribute('href'));

        if (target.length) {
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });

    // Scroll to top button
    function initScrollToTop() {
        const scrollBtn = '<button class="scroll-to-top" aria-label="Volver arriba"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg></button>';

        $('body').append(scrollBtn);

        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 300) {
                $('.scroll-to-top').addClass('visible');
            } else {
                $('.scroll-to-top').removeClass('visible');
            }
        });

        $(document).on('click', '.scroll-to-top', function () {
            $('html, body').animate({ scrollTop: 0 }, 600);
        });
    }

    // Lazy loading images
    function initLazyLoad() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img.lazy').forEach(function (img) {
                imageObserver.observe(img);
            });
        }
    }

    // Añadir animación a las tarjetas cuando aparecen en viewport
    function initScrollAnimations() {
        const animateElements = $('.news-card, .department-card, .news-item, .news-item-full');

        function checkPosition() {
            animateElements.each(function () {
                const elementTop = $(this).offset().top;
                const elementBottom = elementTop + $(this).outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('animated');
                }
            });
        }

        $(window).on('scroll resize', checkPosition);
        checkPosition();
    }

    // Destacar elemento del menú activo
    function highlightActiveMenu() {
        const currentUrl = window.location.href;

        $('.nav-menu a').each(function () {
            if (this.href === currentUrl) {
                $(this).addClass('active');
            }
        });
    }

    // Búsqueda en tiempo real (opcional)
    function initLiveSearch() {
        const searchForm = $('.search-form');

        if (searchForm.length) {
            searchForm.on('submit', function (e) {
                const searchInput = $(this).find('input[type="search"]');

                if (searchInput.val().trim() === '') {
                    e.preventDefault();
                    searchInput.focus();
                }
            });
        }
    }

    // Manejo de resize para menú responsive
    $(window).on('resize', function () {
        if (window.innerWidth > 768) {
            $('.nav-menu').removeAttr('style');
            $('.menu-toggle').removeClass('active');
        } else {
            initMobileMenu();
        }
    });

    // Inicializar todas las funciones cuando el DOM esté listo
    $(document).ready(function () {
        initMobileMenu();
        initScrollToTop();
        initLazyLoad();
        initScrollAnimations();
        highlightActiveMenu();
        initLiveSearch();
    });

})(jQuery);



