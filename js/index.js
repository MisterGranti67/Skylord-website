$(document).ready(function () {
    $(".annonceSkylord").slice(0, 3).show(),
    $("#arata-mult").on("click", function (e) {
    e.preventDefault(),
        $(".annonceSkylord:hidden").slice(0, 3).slideDown(),
        0 == $(".annonceSkylord:hidden").length &&
        $("#arata-mult").text("Fin").addClass("noContent");
    });
});