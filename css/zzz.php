<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['correo'];
$cumple = $_POST['ano']."-".$_POST['mes']."-".$_POST['ano'];

$to = "jb_graterol@hotmail.com";
$subject = "nueva suscripcion";

$message = $nombre." ".$apellido." se ha suscrito a greethive. \r\n
mail: ".$mail."\r\n
cumple: ".$cumple;


$mensaje_sus = "Hemos recibido tu registro. Te avisaremos cuando la aplicación este lista. \r\n
\r\n
Muchas gracias por tu interes.";

if(mail($to, $subject, $message) and mail($mail, 'Un saludo de GretHive', $mensaje_sus) ){
	header('Location: /index.php?s=1');
}




?>
