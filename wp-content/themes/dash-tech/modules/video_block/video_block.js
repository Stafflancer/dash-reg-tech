(function ($) {
    var body = $('body');
    var openVideoPopup = $('.open-video-popup-btn');
    var videoPopup = $('.video-popup');

    if(openVideoPopup.length && videoPopup.length) {
        openVideoPopup.on('click', function () {
            var margin = window.innerWidth - body.width();
            if (margin) {
                body.css('width', 'calc(100% - ' + margin + 'px)');
            }
            if (body.length) {
                body.css('overflow', 'hidden');
            }

            videoPopup.fadeIn(200);

            var iframe = videoPopup.find('iframe');
            if(iframe.length) {
                iframe[0].src += "?autoplay=1";
            }

            var scrollY = $(window).scrollTop();
            body.addClass('opened-modal');
            body.css('top', `-${scrollY}px`);
        });
    }

    var closeVideoPopupBtn = $('.close-video-popup-btn');
    if(closeVideoPopupBtn.length) {
        closeVideoPopupBtn.on('click', function() {
            var scrollY = body.css('top');
            body.removeClass('opened-modal');
            body.css('top', '');
            window.scrollTo(0, parseInt(scrollY) * -1);

            var videoPopup = $(this).closest('.video-popup');
            videoPopup.fadeOut(200);

            var iframe = videoPopup.find('iframe');
            if(iframe.length) {
                var src = iframe[0].src;
                var updatedSrc = src.split('?')[0];
                iframe[0].src = updatedSrc;
            }

            setTimeout(function () {
                if (body.length) {
                    body.css('width', '100%');
                    body.css('overflow', 'auto');
                }
            }, 200);
        });
    }
})
(jQuery);