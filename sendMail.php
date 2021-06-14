<?php


$name = $_POST["name"];
$message = "¡Hola! Han recibido un mensaje.\n" . "Remitente: " . $_POST["name"] . "\nMensaje: " . $_POST["message"];

mail("pedroberumensuarez@gmail.com,Onolascomts@outlook.com,Fernanda909090@hotmail.com", "¡Mensaje nuevo!", $message);

?>