$(function () {
    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();

        if (scrollTop > $('.sec-banner').offset().top) {
            $('.bannerBottom').each(function (i) {
                setTimeout(function () {
                    $('.bannerBottom').eq(i).addClass('bannerBottomShow');
                }, 500 * i);
            });
        } else {
            $('.bannerBottom').each(function (i) {
                setTimeout(function () {
                    $('.bannerBottom').eq(i).removeClass('bannerBottomShow');
                }, 0 * i);
            });
        }

        if (scrollTop > $('.sec-banner').offset().top - 300) {
            $(".bannerTop").addClass("bannerTopShow");
        } else {
            $(".bannerTop").removeClass("bannerTopShow");
        }

        if (scrollTop > $('.sec-product').offset().top - 300) {
            $(".productHome").addClass("productHomeShow");
        } else {
            $(".productHome").removeClass("productHomeShow");
        }

        if (scrollTop > $('.sec-blog').offset().top - 300) {
            $(".blogHome").addClass("blogHomeShow");
        } else {
            $(".blogHome").removeClass("blogHomeShow");
        }
    });

})
