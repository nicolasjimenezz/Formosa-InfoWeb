<?php

$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$mensaje=$_POST['mensaje'];

// Como me va a llegar el cuerpo del mail a mi
$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: ", $mail . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$destinatario = "nicolasjimenez1337@gmail.com";
$asunto= "Mail enviado desde Formosa Webpage";

// Función mail
mail($destinatario, $asunto, utf8_decode($mensaje),$header);

// Redirección
header("Location:contacto-exito.html");

?>