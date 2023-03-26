<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {
	$mail = new PHPMailer(true);

	$mail->isSMTP();       
	$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'user@example.com';                     //SMTP username
	$mail->Password   = 'secret';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
	$mail->setFrom('from@example.com', 'Mailer');
   $mail->addAddress('clutkabolwm@gmail.com'); 

	$mail->isHTML(true);     
	
	$mail->Subject = 'Here is the subject';
   $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $mail->send();
	echo 
	"
	<script>
		alert('Сообщение отправлено')
	</script>
	
	"
	;
}
