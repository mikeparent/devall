$('.gallery__holder').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.gallery__nav'
});

$('.gallery__nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.gallery__holder',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3
            }
        }
    ]
});
    