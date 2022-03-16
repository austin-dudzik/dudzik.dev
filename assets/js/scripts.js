// Show greeting in the console
console.log(`
  ======  ===  === ======  ======= === ==== ===
 ===  === ===  === ===     ======= === ========
 ======== ===  ===  =====    ===   === ========
 ===  === ===  ===     ===   ===   === === ====
 ===  ===  ======  ======    ===   === ===  ===

 =======  ===  === =======   ======= === ===  ===
 ===  === ===  === ===  ===      === === === ===
 ===  === ===  === ===  ===    ===   === ======
 ===  === ===  === ===  ===  ===     === === ===
 =======   ======  =======  ======== === ===  ===

Welcome to dudzik.dev!

I'm Austin Dudzik, a 19 year old indie maker and developer. This is my portfolio where you can check out some of the work I do. I'm also available on social media where you can explore more about myself or get in contact.

GitHub: https://github.com/austin-dudzik

Twitter: https://twitter.com/austinthemaker

Behance: https://behance.net/austindudzik

Product Hunt: https://producthunt.com/@dudzik

Dribbble: https://dribbble.com/austin-dudzik

LinkedIn: https://linkedin.com/in/austin-dudzik

`);

// Call scroll function on scroll
window.onscroll = function () {
    scrollRotate();

    if (window.pageYOffset === 0) {
        $(".logo_area").attr("href", "https://dudzik.dev");
    } else {
        $(".logo_area").attr("href", "javascript:void()");
        $(".logo_area").click(function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        })
    }

};

// Rotate logo on page scroll
function scrollRotate() {
    let image = document.getElementById("rotate");
    image.style.transform = "rotate(" + window.pageYOffset / 15 + "deg)";
}

// Swap logo on logo hover
$(".logo_area").hover(function () {
        $(".logo").attr("src", "log_black.svg");
    },
    function () {
        $(".logo").attr("src", "log.svg");
    });


// JS for popup banner
$(".fa-times").click(function () {
    document.cookie = "hideBanner=1";
    $(".banner").css("display", "none");
});

if (document.cookie.indexOf('hideBanner=') != -1) {
    $(".banner").css("display", "none");
}