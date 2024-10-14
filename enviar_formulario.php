<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $mensaje = $_POST['inputMessage'];

    $destinatario = "jairo98pkm54@gmail.com"; // correo
    $asunto = "Nuevo mensaje desde el formulario de contacto";

    $contenido = "Nombre: " . $nombre . "\n";
    $contenido .= "Email: " . $email . "\n\n";
    $contenido .= "Mensaje: \n" . $mensaje . "\n";

    // Configuración de los encabezados del correo
    $encabezados = "From: " . $email . "\r\n";
    $encabezados .= "Reply-To: " . $email . "\r\n";
    $encabezados .= "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($destinatario, $asunto, $contenido, $encabezados)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
