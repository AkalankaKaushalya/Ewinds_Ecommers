<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
    );
    
    $mail->isSMTP('true');                                      //Send using SMTP
    $mail->Host       = 'mail.eprogrammers.lk';                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@eprogrammers.lk';                 //SMTP username
    $mail->Password   = 'Gcc7kGXyfj4';                         //SMTP password
    $mail->SMTPSecure = 'ssl'; //TLS or SSL                     //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@eprogrammers.lk', 'E-programmers (Pvt) Ltd');
    
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    
    $mail->addAddress('kaushalyaakalanka343@gmail.com');           //Name is optional (Recipient/S)


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here hello senol';
    $mail->Body    = 'This is the HTML message body <b>We are eprogrammers.lk</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>