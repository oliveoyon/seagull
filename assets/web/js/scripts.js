(function ($) {
    "use strict";

    // theme panel switch
    $('.panel_switch').on('click', function () {
        $(".colormenu").toggleClass("shown");
    });

    // theme active
    $('body').addClass('themeColor1');
    jQuery(function ($) {
        var color = $.cookie('color');
        $('.colchange li').on('click', function (e) {
            color = $('.colchange li').css('border', '0px')
            color = $(this).css('border', '5px solid #333')
            color = $(this).attr('class')
            $("body").attr("class", color)
            $.cookie('color', color, {
                expires: 365,
                path: '/'
            });
            return false;
        }).filter(function () {
            return $(this).attr('class') === color
        }).click()
    });

    // loader active
    $(window).on('load', function () {
        $(".loader_container").fadeOut(300);
    });

    // fixed-header active
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 191) {
            $('.header_bottom').addClass('header_fixed');
            $('.white_space').css('height', '80px');
            $('.go_top').show();
        } else {
            $('.header_bottom').removeClass('header_fixed');
            $('.white_space').css('height', '0px');
            $('.go_top').hide();
        }
    });

    // smooth-scroll active
    $('.go_top').on('click', function () {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 700);
        return false;
    });

    // slicknav active
    $('#menu').slicknav({
        label: '',
        prependTo: '.sliknav',
        beforeOpen: function (trigger) {
            slicknavOpened(trigger);
        },
    });

    function slicknavOpened(trigger) {
        var $trigger = $(trigger[0]);
        if ($trigger.hasClass('slicknav_btn')) {
            return;
        }
        var $liParent = $trigger.parent();
        var $ulParent = $liParent.parent();
        $ulParent.children().each(function () {
            var $child = $(this);
            if ($child.is($liParent)) {
                return;
            }
            if ($child.hasClass('slicknav_collapsed')) {
                return;
            }
            if (!$child.hasClass('slicknav_open')) {
                return;
            }
            var $anchor = $child.children().first();
            if (!$anchor.hasClass('slicknav_item')) {
                return;
            }
            $anchor.click();
        });
    }

    // search top header
    $('.header-search .show-search,.header-search .over-dark').on('click', function (e) {
        e.stopPropagation();
        $(".header-search").toggleClass("active");
        $(".header-search .show-search").toggleClass("active");
        $('.header-search .show-search i').toggleClass("ti-search ti-close");
    });

    // cart top header
    $('.cart-icon-top').on('click', function (e) {
        e.stopPropagation();
        $(".cart_list").toggleClass("active");
    });

    //counter up
    if ($('.counterUp').length > 0) {
        $('.counterUp').counterUp({
            delay: 10,
            time: 800
        });
    }

    //responsive menu active
    $('.menu_btn').on('click', function () {
        $('.main_menu').toggleClass('d-block');
        $('.menu_btn i').toggleClass('icofont-navigation-menu icofont-close-line');
        $('body').toggleClass('oflow-hidden');
        $('header, header.header_fixed').toggleClass('lh45');
    });
    $('.main_menu ul li a').on('click', function () {
        $('.main_menu').removeClass('d-block');
        $('.menu_btn i').toggleClass('icofont-close-line icofont-navigation-menu');
        $('body').removeClass('oflow-hidden');
        $('header, header.header_fixed').removeClass('lh45');
    });

    // courses-carousel active
    var owl = $('.owl-carousel.landing_carousel');
    owl.owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
    });

    function setAnimation(_elem, _InOut) {
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        _elem.each(function () {
            var $elem = $(this);
            var $animationType = 'animated ' + $elem.data('animation-' + _InOut);
            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType)
            })
        })
    }
    owl.on('change.owl.carousel', function (event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation($elemsToanim, 'out')
    });
    var round = 0;
    owl.on('changed.owl.carousel', function (event) {
        var $currentItem = $('.owl-item', owl).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");
        setAnimation($elemsToanim, 'in')
    })
    owl.on('translated.owl.carousel', function (event) {
        console.log(event.item.index, event.page.count);
        if (event.item.index == (event.page.count - 1)) {
            if (round < 1) {
                round++
                console.log(round)
            } else {
                owl.trigger('stop.owl.autoplay');
                var owlData = owl.data('owl.carousel');
                owlData.settings.autoplay = !1;
                owlData.options.autoplay = !1;
                owl.trigger('refresh.owl.carousel')
            }
        }
    });

    $('.owl-carousel.testimonial_slider').owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        margin: 0,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
    });
    $('.owl-carousel.news_slider').owlCarousel({
        items: 3,
        nav: false,
        dots: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // parallax active
    $('.parallax').jarallax();

    // progress
    var $piechart = $('.progress-bar-circle');
    if ($piechart.length > 0) {
        $piechart.appear();
        $('body').on('appear', '.progress-bar-circle', function () {
            var current_item = $(this);
            if (!current_item.hasClass('appeared')) {
                var $color = $(this).data('color');
                current_item.circleProgress({
                    startAngle: 0,
                    fill: {
                        color: $color
                    },
                    emptyFill: '#dadada',
                    lineCap: 'round',
                    animation: {
                        duration: 1000,
                        easing: 'circleProgressEasing'
                    },
                });
                current_item.addClass('appeared');
            }
        });
    }

})(jQuery);