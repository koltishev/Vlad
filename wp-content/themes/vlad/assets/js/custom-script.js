jQuery(document).ready(function($) {
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});