$(document).on("input", "#cmsg", function() {
    var limite = 600;
    var informativo = "letras.";
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite - caracteresDigitados;

    if (caracteresRestantes <= 0) {
        var comentario = $("textarea[name=cmsg]").val();
        $("textarea[name=cmsg]").val(comentario.substr(0, limite));
        $(".caracteres").text("0 " + informativo);
    } else {
        $(".caracteres").text(caracteresRestantes + " " + informativo);
    }
});
