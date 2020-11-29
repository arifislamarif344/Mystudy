<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer( true );
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'arifislamarif344@gmail.com'; // SMTP username
    $mail->Password = '9191if17gmail'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;

    //Recipients
    $mail->setFrom( $email, $name );
    $mail->addAddress( 'arifislamarf344@gmail.com' ); // Name is optional

    // Content
    $mail->isHTML( true ); // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = $message;

    $mail->send();
    header( 'location:index.php?success' );
} catch ( Exception $e ) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
