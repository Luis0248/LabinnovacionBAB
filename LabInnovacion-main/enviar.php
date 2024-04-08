<?php
$name = $_POST['name'];
$email = $_POST['email'];

$header = 'From: ' $email "\r\n";
$header = "X-Mailer: PHP/" phpversion() "\r\n";
$header = "Mine-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$massage = "Este mensaje es de: " $name "\r\n";
$massage = "Fue enviado desde el correo de: " $email "\r\n";

$para = 'luissantiagoforeroheredia@gmail.com';
$asunto= 'asunto del mensaje';

email($para, $asunto, utf8_decode($massage),$header);

header("Location:index.html");
?>
