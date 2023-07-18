<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "tu-correo@ejemplo.com"; // Cambia esto con tu dirección de correo electrónico
  $subject = "Nuevo mensaje de contacto";
  $body = "Nombre: $name\n\nEmail: $email\n\nMensaje:\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Correo enviado correctamente";
  } else {
    echo "Error al enviar el correo";
  }
}
?>
