jQuery(function($) {
    'use strict';

    /* ----------------------------------------------------------- */
    /*  Fixed header
    /* ----------------------------------------------------------- */
    $(window).on('scroll', function() {

        // fixedHeader on scroll
        function fixedHeader() {
            var headerTopBar = $('.top-bar').outerHeight();
            var headerOneTopSpace = $('.header-one .logo-area').outerHeight();

            var headerOneELement = $('.header-one .site-navigation');
            var headerTwoELement = $('.header-two .site-navigation');

            if ($(window).scrollTop() > headerTopBar + headerOneTopSpace) {
                $(headerOneELement).addClass('navbar-fixed');
                $('.header-one').css('margin-bottom', headerOneELement.outerHeight());
            } else {
                $(headerOneELement).removeClass('navbar-fixed');
                $('.header-one').css('margin-bottom', 0);
            }
            if ($(window).scrollTop() > headerTopBar) {
                $(headerTwoELement).addClass('navbar-fixed');
                $('.header-two').css('margin-bottom', headerTwoELement.outerHeight());
            } else {
                $(headerTwoELement).removeClass('navbar-fixed');
                $('.header-two').css('margin-bottom', 0);
            }
        }
        fixedHeader();


        // Count Up
        function counter() {
            var oTop;
            if ($('.counterUp').length !== 0) {
                oTop = $('.counterUp').offset().top - window.innerHeight;
            }
            if ($(window).scrollTop() > oTop) {
                $('.counterUp').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 1000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
            }
        }
        counter();


        // scroll to top btn show/hide
        function scrollTopBtn() {
            var scrollToTop = $('#back-to-top'),
                scroll = $(window).scrollTop();
            if (scroll >= 50) {
                scrollToTop.fadeIn();
            } else {
                scrollToTop.fadeOut();
            }
        }
        scrollTopBtn();
    });


    $(document).ready(function() {

        // navSearch show/hide
        function navSearch() {
            $('.nav-search').on('click', function() {
                $('.search-block').fadeIn(350);
            });
            $('.search-close').on('click', function() {
                $('.search-block').fadeOut(350);
            });
        }
        navSearch();

        // navbarDropdown
        function navbarDropdown() {
            if ($(window).width() < 992) {
                $('.site-navigation .dropdown-toggle').on('click', function() {
                    $(this).siblings('.dropdown-menu').animate({
                        height: 'toggle'
                    }, 300);
                });

                var navbarHeight = $('.site-navigation').outerHeight();
                $('.site-navigation .navbar-collapse').css('max-height', 'calc(100vh - ' + navbarHeight + 'px)');
            }
        }
        navbarDropdown();


        // back to top
        function backToTop() {
            $('#back-to-top').on('click', function() {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        }
        backToTop();


        // banner-carousel
        function bannerCarouselOne() {
            $('.banner-carousel.banner-carousel-1').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                speed: 600,
                arrows: true,
                prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>'
            });
            $('.banner-carousel.banner-carousel-1').slickAnimation();
        }
        bannerCarouselOne();


        // banner Carousel Two
        function bannerCarouselTwo() {
            $('.banner-carousel.banner-carousel-2').slick({
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                speed: 600,
                arrows: true,
                prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>'
            });
        }
        bannerCarouselTwo();


        // pageSlider
        function pageSlider() {
            $('.page-slider').slick({
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                speed: 600,
                arrows: true,
                prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>'
            });
        }
        pageSlider();


        // Shuffle js filter and masonry
        function serviceShuffle() {
            if ($('.shuffle-wrapper').length !== 0) {
                var Shuffle = window.Shuffle;
                var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
                    itemSelector: '.shuffle-item',
                    sizer: '.shuffle-sizer',
                    buffer: 1
                });
                $('input[name="shuffle-filter"]').on('change', function(evt) {
                    var input = evt.currentTarget;
                    if (input.checked) {
                        myShuffle.filter(input.value);
                    }
                });
                $('.shuffle-btn-group label').on('click', function() {
                    $('.shuffle-btn-group label').removeClass('active');
                    $(this).addClass('active');
                });
            }
        }
        serviceShuffle();


        // testimonial carousel
        function testimonialCarousel() {
            $('.testimonial-slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                speed: 600,
                arrows: false
            });
        }
        testimonialCarousel();


        // team carousel
        function teamCarousel() {
            $('.team-slide').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 2,
                arrows: true,
                prevArrow: '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
        teamCarousel();


        // media popup
        function mediaPopup() {
            $('.gallery-popup').colorbox({
                rel: 'gallery-popup',
                transition: 'slideshow',
                innerHeight: '500'
            });
            $('.popup').colorbox({
                iframe: true,
                innerWidth: 600,
                innerHeight: 400
            });
        }
        mediaPopup();

    });


});



/**
 * Testimonials slider
 */
new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    }
});


//University Page Accordion JS
$(document).ready(function() {

    $(".next-step").click(function(e) {

        var $active = $('.nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function(e) {

        var $active = $('.nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}