<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$mail= $_POST['email']; 
$quiniela=$_POST['quiniela']; 
/*$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; */
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $_POST['nombre'] . " \r\n"; 
$mensaje .= "Su e-mail es: " . $_POST['email'] . " \r\n";
$mensaje .="La quiniela propuesta es: ".$_POST['quiniela'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'asirgames97@gmail.com'; 
$asunto = 'Quiniela SoloQ Challenge'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 
?>