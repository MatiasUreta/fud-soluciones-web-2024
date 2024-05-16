<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $destinatario = "fudsolucionesweb@gmail.com";
    $asunto = "Nueva suscripción al newsletter";
    $cuerpo = "Nuevo suscriptor: $email";

    $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    mail($destinatario, $asunto, $cuerpo, $headers);

    echo "Suscripción enviada con éxito";
} else {
    echo "Hubo un error al enviar la suscripción";
}
?>
