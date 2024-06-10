<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "tucorreo@dominio.com";  // Reemplaza con tu correo electrónico
    $subject = "Nuevo mensaje de $name";
    $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Mensaje enviado. Gracias por contactarme!";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
