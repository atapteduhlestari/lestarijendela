$(function () {
    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();

        if (scrollTop > $('.sec-banner').offset().top) {
            $('.bannerBottom').each(function (i) {
                setTimeout(function () {
                    $('.bannerBottom').eq(i).addClass('bannerBottomShow');
                }, 500 * i);
            });
        }

        if (scrollTop > $('.sec-banner').offset().top - 300) {
            $(".bannerTop").addClass("bannerTopShow");
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

});

document.addEventListener("DOMContentLoaded", function () {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyloadImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function () {
                var scrollTop = window.pageYOffset;
                lazyloadImages.forEach(function (img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                    window.removeEventListener("resize", lazyload);
                    window.removeEventListener("orientationChange", lazyload);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
    }
});
