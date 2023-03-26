<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!empty($_POST)) {

//Load Composer's autoloader
    require $_SERVER["DOCUMENT_ROOT"] . '/phpmailer/src/Exception.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/phpmailer/src/PHPMailer.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/phpmailer/src/SMTP.php';


    $mail = new PHPMailer(true);                               // Passing `true` enables exceptions
    $mail->CharSet = 'UTF-8';
//Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output 
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	 $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = 'ssl';                             // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

//Recipients
	 $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('clutkaboltwm@gmail.com', 'clutkaboltwm@gmail.com');     // Add a recipient

//Attachments
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $message = '';
    foreach ($_POST as $key => $item) {
        if ($key != 'subject') {
            $message .= $key . ' - ' . $item . '<br>';
        }
    }
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
}