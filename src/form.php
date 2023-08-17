<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "tu@email.com";  // Coloca aquí tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de $nombre";
    $contenido = "De: $nombre\nEmail: $email\nMensaje: $mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    echo "Mensaje enviado correctamente. Gracias por contactarnos.";
}
?>