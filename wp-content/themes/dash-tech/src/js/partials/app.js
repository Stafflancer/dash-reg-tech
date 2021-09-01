(function ($) {
    'use strict';

    // add sticky class for header after scroll
    $(window).on('scroll', function () {
        var header = $('.header');
        var scrollTop = $(document).scrollTop();
        var menu = $('.header .mobile-menu-holder');

        if($(window).width() <= 992 && menu.length && menu.is(':visible')) {
            menu.slideUp(150);
        }

        if (header.length) {
            if (scrollTop > 20) {
                header.addClass('sticky');
            } else {
                header.removeClass('sticky');
            }
        }
    });

    // Mobile menu open/close
    var burgerBtn = $('.burger-btn')
    var menu = $('.header .mobile-menu-holder');
    if (burgerBtn.length && menu.length) {
        burgerBtn.on('click', function () {
            menu.slideToggle(100);
        });
    }
})(jQuery);