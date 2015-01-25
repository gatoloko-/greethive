<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$fecha = $_POST['ano']."-".$_POST['mes']."-".$_POST['dia'];

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.ipage.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contacto@greethive.com';                 // SMTP username
$mail->Password = 'q8MdcnZ3vZeaAFx';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'contacto@greethive.com';
$mail->FromName = 'GreetHive';
$mail->addAddress('ricomo@outlook.com', 'Rigoberto Cortazar');     // Add a recipient
$mail->addAddress('jbenjamingf@gmail.com', 'Javier Graterol');               // Name is optional
$mail->addReplyTo('contacto@greethive.com', 'GreetHive');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Un saludo de GreetHive';
$mail->Body    = file_get_contents("email/email.php");

if($mail->send()) {
    header('Location: http://www.greethive.com/?s=ok');
}

?>