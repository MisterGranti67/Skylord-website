$(document).ready(function () {
    $(".annonceSkylord:hidden").slice(0, 3).slideDown(),
    $("#arata-mult").on("click", function (e) {
        e.preventDefault(),
        $(".annonceSkylord:hidden").slice(0, 3).slideDown(),
        0 == $(".annonceSkylord:hidden").length &&
        $("#arata-mult").text("Fin").addClass("noContent");
    });
});

$('.baguette-js--openNav').click(function(e){
    e.preventDefault();
    $('body').toggleClass('baguette-navOpen');
});

$('.baguette-js--closeNav').click(function(e){
    $('body').removeClass('baguette-navOpen');
})

$('#baguette-overlay').click(function(e){
    $('body').removeClass('baguette-navOpen');
})   