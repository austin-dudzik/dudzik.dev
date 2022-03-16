$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$("#menu_toggle").on("click", () => {
    $(".navbar").toggleClass("colored");
    $(".navbar i").toggleClass("fa-bars fa-times");
});

$("#modeToggle").on("click", function () {
    if (document.cookie.indexOf('theme_mode') === -1) {
        document.cookie = 'theme_mode=1';
    } else {
        document.cookie = 'theme_mode=; expires=Thu, 01 Jan 1970 00:00:00 GMT';
    }
    toggleMode();
});


if (document.cookie.indexOf('theme_mode') !== -1) {
    toggleMode();
}

function toggleMode() {
    $("html, img, #logo, .ni").toggleClass("invert");
    $(".no-invert").toggleClass("bg-invert");

    $("img.logo").attr("src", $(".logo_area img").attr("src") === "assets/img/logo-white.svg" ? "assets/img/logo-dark.svg" : "assets/img/logo-white.svg");

}

$(window).on("load", () => {
    $(".gradient-top").css("visibility", $('.top-section').visible(true) ? "hidden" : "visible");
    $("body").css("overflow", "visible");
    $(".loader").fadeOut();
})

// $("a").on("click", () => {
//     $("body").css("overflow", "hidden");
//     $(".loader").fadeIn();
// });

$(window).on("scroll", () => {
    $(".gradient-top").css("visibility", $('.top-section').visible(true) ? "hidden" : "visible");
})

new Swiper('.swiper-container.forward', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: false,
    delay: 0,
    speed: 10000,
    simulateTouch: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
});

new Swiper('.swiper-container.reverse', {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: false,
    delay: 0,
    speed: 10000,
    simulateTouch: false,
    autoplay: {
        delay: 0,
        reverseDirection: true,
        disableOnInteraction: false,
    },
});

Fancybox.bind('[data-fancybox="certifications"]', {
    dragToClose: false,

    Toolbar: false,
    closeButton: "top",

    Image: {
        zoom: false,
    },

    on: {
        initCarousel: (fancybox) => {
            const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

            fancybox.$container.style.setProperty(
                "--bg-image",
                `url("${slide.$thumb.src}")`
            );
        },
        "Carousel.change": (fancybox, carousel, to, from) => {
            const slide = carousel.slides[to];

            fancybox.$container.style.setProperty(
                "--bg-image",
                `url("${slide.$thumb.src}")`
            );
        },
    },
});