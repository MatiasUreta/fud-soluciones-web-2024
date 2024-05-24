<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, 'variables.env');
$dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $mensaje = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    $mail = new PHPMailer(true);

    // Habilitar la depuración
    $mail->SMTPDebug = 2;

    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = getenv('SMTP_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USERNAME');
        $mail->Password = getenv('SMTP_PASSWORD');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Destinatarios
        $mail->setFrom($email, "$nombre $apellido");
        $mail->addAddress('info@fudsolucionesweb.com');

        // Contenido
        $mail->isHTML(false);
        $mail->Subject = 'Nuevo mensaje de tu sitio web';
        $mail->Body = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";
        $mail->send();
        echo "Mensaje enviado con éxito";
    } catch (Exception $e) {
        error_log("Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}");
    }
}
?>
