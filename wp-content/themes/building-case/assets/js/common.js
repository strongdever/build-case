!(function ($) {
    "use strict";
    if ($(window).scrollTop() > 300) {
        if (!$('header').hasClass('scrolled')) {
            $('header').addClass('scrolled');
        }
    } else {
        if ($('header').hasClass('scrolled')) {
            $('header').removeClass('scrolled');
        }
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            if (!$('header').hasClass('scrolled')) {
                $('header').addClass('scrolled');
            }
        } else {
            if ($('header').hasClass('scrolled')) {
                $('header').removeClass('scrolled');
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
        //sub menu ------->

        $('.nav-objects').click(function () {
            var target = $('#objects');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 120
                }, 300);
            }
        });

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