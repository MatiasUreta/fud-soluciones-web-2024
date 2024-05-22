<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = strtolower(trim($_POST['firstName']));
$apellido = strtolower(trim($_POST['lastName']));
$email = strtolower(trim($_POST['email']));
$telefono = strtolower(trim($_POST['phone']));
$mensaje = strtolower(trim($_POST['message']));
$mail = new PHPMailer(true);
try {
// Server settings
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com'; // Specify your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'matiasureta28@gmail.com'; // SMTP username
$mail->Password = 'Ragnarok2409.'; // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;
// Recipients
$mail->setFrom($email, "$nombre $apellido");
$mail->addAddress('info@fudsolucionesweb.com'); // Add a recipient
// Content
$mail->isHTML(false); // Set email format to plain text
$mail->Subject = 'Nuevo mensaje de tu sitio web';
$mail->Body = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";
$mail->send();
echo "Mensaje enviado con éxito";
} catch (Exception $e) {
echo "Hubo un error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
