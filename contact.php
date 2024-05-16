<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strtolower($_POST['firstName']);
    $apellido = strtolower($_POST['lastName']);
    $email = strtolower($_POST['email']);
    $telefono = strtolower($_POST['phone']);
    $mensaje = strtolower($_POST['message']);
    
    $destinatario = "fudsolucionesweb@gmail.com";
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
