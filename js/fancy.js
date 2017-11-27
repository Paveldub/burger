$("[data-fancybox]").fancybox({
    transitionEffect : "rotate"
});

$('.popup__link').on('click', e => {
    e.preventDefault()

    $.fancybox.close();
})