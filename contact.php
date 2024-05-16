<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['message'];

    $destinatario = "fudsolucionesweb@gamil.com";
    $asunto = "Nuevo mensaje de tu sitio web";
    $cuerpo = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";

    $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    mail($destinatario, $asunto, $cuerpo, $headers);

    echo "Mensaje enviado con éxito";
} else {
    echo "Hubo un error al enviar el mensaje";
}
?>
