

let windowHeight = $(window).height(),
    mainSlider = $('.slick-slider');

mainSlider.slick({
    dots: true,
    arrows: true
});

mainSlider.css({
   height : windowHeight
});
console.log(windowHeight);