(function ($) {
    $(document).on('ready', function () {
        var testimonialsCarousel = $('.client-testimonials-slider');
        if (testimonialsCarousel.length) {
            testimonialsCarousel.each(function () {
                $(this).slick({
                    dots: true,
                    arrows: true,
                    prevArrow: '<button class="prev-slick-arrow"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
                        '     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">\n' +
                        '            <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,480\n' +
                        '\t\t\t\tC132.288,480,32,379.712,32,256S132.288,32,256,32s224,100.288,224,224S379.712,480,256,480z"/>\n' +
                        '    <path d="M292.64,116.8l-128,128c-6.204,6.241-6.204,16.319,0,22.56l128,128l22.56-22.72L198.56,256L315.2,139.36L292.64,116.8z"\n' +
                        '    />\n' +
                        '    \n' +
                        '</svg></button>',
                    nextArrow: '<button class="next-slick-arrow"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
                        '     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">\n' +
                        '            <path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,480\n' +
                        '\t\t\t\tC132.288,480,32,379.712,32,256S132.288,32,256,32s224,100.288,224,224S379.712,480,256,480z"/>\n' +
                        '            <path d="M219.2,116.8l-22.56,22.56L313.44,256L196.8,372.8l22.56,22.56l127.84-128c6.204-6.241,6.204-16.319,0-22.56L219.2,116.8\n' +
                        '\t\t\t\tz"/>\n' +
                        '</svg></button>',
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            });
        }
    });
})(jQuery);