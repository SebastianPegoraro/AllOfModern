$("#normativa").click(function() {
    $('html,body').animate({
        scrollTop: $("#norm").offset().top-150},
        'slow');
});

$("#formulario").click(function() {
    $('html,body').animate({
        scrollTop: $("#formu").offset().top},
        'slow');
});


$("#consultas").click(function() {
    $('html,body').animate({
        scrollTop: $("#consul").offset().top},
        'slow');
});
