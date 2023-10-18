!(function ($) {
    "use strict";
    if ($(window).scrollTop() > 300) {
        if (!$('header').hasClass('scrolled')) {
            $('header').addClass('scrolled');
        }
        $('#menu ul li ul li a').css("background-color", "#FFF");
        $('#menu ul li ul li a:hover').css("background-color", "#f3f3f35c");
        $(".top-arrow").toggleClass("visible");
    } else {
        if ($('header').hasClass('scrolled')) {
            $('header').removeClass('scrolled');
        }
        $('#menu ul li ul li a').css("background-color", "#fff0");
        $('#menu ul li ul li a:hover').css("background-color", "#f3f3f3 !important");
    }

    if ($(this).scrollTop() > 500) {
        if (!$('.top-arrow').hasClass('visible')) {
            $('.top-arrow').addClass('visible');
        }
    } else {
        if ($('.top-arrow').hasClass('visible')) {
            $('.top-arrow').removeClass('visible');
        }
    }
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            if (!$('header').hasClass('scrolled')) {
                $('header').addClass('scrolled');
            }
            $('#menu ul li ul li a').css("background-color", "#FFF");
            $('#menu ul li ul li a:hover').css("background-color", "#f3f3f35c");
        } else {
            if ($('header').hasClass('scrolled')) {
                $('header').removeClass('scrolled');
            }
            $('#menu ul li ul li a').css("background-color", "#fff0");
            $('#menu ul li ul li a:hover').css("background-color", "#f3f3f3 !important");
        }

        if ($(this).scrollTop() > 500) {
            if (!$('.top-arrow').hasClass('visible')) {
                $('.top-arrow').addClass('visible');
            }
        } else {
            if ($('.top-arrow').hasClass('visible')) {
                $('.top-arrow').removeClass('visible');
            }
        }
    });

    $(document).ready(function () {
        //<--------sub menu
        var nav = $('#menu > ul > li');
        nav.find('li').hide();
        nav.click(function () {
            nav.not(this).find('li').hide();
            $(this).find('li').slideToggle();
        });
        $(function () {
            $('#menu input').click(function () {
                $('#menu ul').slideToggle()
            });
        });

        $('.nav-objects').click(function () {
            var target = $('#objects');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });
        
        //sub menu ------->

        $('.nav-exterior-photo').click(function () {
            var target = $('#exterior-photo');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });

        $('.nav-drawings').click(function () {
            var target = $('#drawings');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });

        $('.nav-estimates').click(function () {
            var target = $('#estimates');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });

        $('.nav-specifications').click(function () {
            var target = $('#specifications');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });

        $('.nav-applying').click(function () {
            var target = $('#applying');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });
    });
})(jQuery);