$(document).ready(function() {
    // Cuando se haga clic en el botón
    $("#mostrarMensaje").click(function() {
        // Muestra el mensaje emergente
        mostrarMensajeEmergente("Tienes que iniciar sesión primero");
    });
});

// mostrar el mensaje emergente
function mostrarMensajeEmergente(mensaje) {
    var mensajeDiv = $("<div></div>");
    mensajeDiv.text(mensaje);

    // Agrega estilos al mensaje emergente (puedes personalizar esto según tus necesidades)
    mensajeDiv.css({
        "position": "fixed",
        "top": "50%",
        "left": "50%",
        "transform": "translate(-50%, -50%)",
        "padding": "20px",
        "background-color": "#fff",
        "border": "1px solid #ccc",
        "box-shadow": "0 0 10px rgba(0, 0, 0, 0.1)",
        "z-index": "9999",
        "font-family": 'Montserrat',
        "font-size": "300%"
    });

    // Agrega el mensaje emergente al cuerpo del documento
    $("body").append(mensajeDiv);

    // Desaparece el mensaje después de 3 segundos (puedes ajustar esto según tus necesidades)
    setTimeout(function() {
        mensajeDiv.fadeOut("slow", function() {
            // Elimina el elemento después de que se desvanezca
            $(this).remove();
        });
    }, 1000);
}
