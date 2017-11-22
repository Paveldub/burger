$(document).ready(function () {
    slider = $('.burger-wrapper').bxSlider({
        speed : 600     
    });
    $('.burger__arrow-right').on('click', function(e){
        e.preventDefault();
        slider.goToNextSlide();
    });
    $('.burger__arrow-left').on('click', function(e){
        e.preventDefault();
        slider.goToPrevSlide();
    });
});
