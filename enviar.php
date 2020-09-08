<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: '.$mail." \n";
$header = 'X-Mailer: PHP/'.phpversion()." \n";
$header = "Mime-Version: 1.0 \n";
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: ".$name." \r\n";
$message = "SU e-mail es: ".$mail." \r\n";
$message = "Telefono de contacto: ".$phone." \r\n";
$message = "Mesaje: ".$_POST['message']." \r\n";
$message = "Enviado el: ".date('d/m/Y', time());

$para = 'claudiosilva.mart@gmail.com';
$asunto = 'Consulta Cliente - GRUPO CSH';

mail($para, $asunto, utf8_decade($message), $header);

header("Location:/html/index.html");
?>