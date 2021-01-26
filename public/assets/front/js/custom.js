// $(document).ready(function() {
//     $(".navbar-light .dmenu").hover(
//         function() {
//             $(this)
//                 .find(".sm-menu")
//                 .first()
//                 .stop(true, true)
//                 .slideDown(150);
//         },
//         function() {
//             $(this)
//                 .find(".sm-menu")
//                 .first()
//                 .stop(true, true)
//                 .slideUp(105);
//         }
//     );
// });

// //option
// $(".panel-collapse").on("show.bs.collapse", function() {
//     $(this)
//         .siblings(".panel-heading")
//         .addClass("active");
// });

// $(".panel-collapse").on("hide.bs.collapse", function() {
//     $(this)
//         .siblings(".panel-heading")
//         .removeClass("active");
// });

//slider
$(document).ready(function() {
    $(".multiple-items").slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
// testominial
// $(function() {
//     $(".testi.owl-carousel").owlCarousel({
//         items: 2,
//         margin: 10,
//         lazyLoad: true,
//         dots: true,
//         autoPlay: true,
//         autoPlayTimeout: 3000,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             600: {
//                 items: 2
//             },
//             1000: {
//                 items: 2
//             }
//         }
//     });
// });
