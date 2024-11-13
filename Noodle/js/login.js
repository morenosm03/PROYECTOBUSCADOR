$(document).ready(function() {
    const inputs = $(".input-datos");
    const toggle_btn = $(".toggle");
    const main = $("main");
    const puntos = $(".puntos span");
    const imagenes = $(".imagen");

    inputs.on("focus", function() {
        $(this).addClass("activo");
    });

    inputs.on("blur", function() {
        if ($(this).val() != "") return;
        $(this).removeClass("activo");
    });

    toggle_btn.on("click", function() {
        main.toggleClass("sign-up-modo");
    });

    function moveSlider(){
        let index = $(this).data("value");

        let currentImage = $(`.img-${index}`);
        imagenes.removeClass("mostrar");
        currentImage.addClass("mostrar");

        const deslizador_texto = $(".texto-grupo");
        deslizador_texto.css("transform", `translateY(${-(index - 1) * 2.2}rem)`);


        puntos.removeClass("activo");
        $(this).addClass("activo");
    }

    puntos.on("click", moveSlider);
});