<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['email']) {

    $mail = new PHPMailer(true);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $services = $_POST['services'];

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        // $mail->Host = 'mail.speaknowvideo.com'; //Set the SMTP server to send through
        // $mail->Host = 'relay-hosting.secureserver.net';
        // $mail->SMTPAuth = true; //Enable SMTP authentication
        // // Todo: Change to your email and password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        // $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        // ====
        $mail->Host="localhost";
        $mail->SMTPAuth = false;
        $mail->SMTPAutoTLS = false; 
        $mail->Port = 25;
        // ====
        $mail->Username = 'sales@speaknowvideo.com'; //SMTP email
        $mail->Password = 'sales2022'; //SMTP password

        //Recipients
        // Todo: Change to your email
        $mail->setFrom('sales@speaknowvideo.com', 'Contact from form Speaknowvideo.com'); //SMTP email
        $mail->addAddress('sales@speaknowvideo.com', 'Contact from form Speaknowvideo.com'); //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Contact from form Speaknowvideo.com';
        $mail->Body = "<b>Name</b>: $name<br><b>Email</b>: $email<br><b>Phone</b>: $phone<br><b>Service</b>: $services";
        // $mail->AltBody = '';

        $mail->send();
        echo 'Message has been sent';
        header('Location: ../index.html?status=ok');
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // header('Location: ../index.html?status=error');

    }
}
