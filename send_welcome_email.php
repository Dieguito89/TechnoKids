<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    $subject = "Bienvenido a TechnoKids";
    $message = "Gracias por unirte a TechnoKids. Estamos emocionados de tenerte en nuestra comunidad.";
    $headers = "From: no-reply@technokids.com\r\n";
    
    if (mail($email, $subject, $message, $headers)) {
        echo "Correo de bienvenida enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar el correo. Por favor, intenta de nuevo.";
    }
}
?>
