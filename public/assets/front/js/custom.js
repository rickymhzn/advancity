//slider
jQuery('.slider').slick({
  infinite:true,
  slidesToShow: 4,
  slidesToScroll: 4,
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
        ]
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
