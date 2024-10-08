<?php
session_start(); // Start a session

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include ("PHPMailer/src/SMTP.php");
include ("PHPMailer/src/Exception.php");
include ("PHPMailer/src/PHPMailer.php");

if(isset($_POST['username']) && isset($_POST['email'])){
    $name    = $_POST['username'];
    $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mail    = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "chivinsaing24@gmail.com"; // SMTP Gmail account
        $mail->Password = "azek qchb sssq utsx"; // Use environment variable or other secure method
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->setFrom($email);
        $mail->addAddress('chivinsaing24@gmail.com');
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = "My name is $name <br>My email is $email <br> My message is $message"; // Message
        $mail->send();

        // Send auto-reply
        $autoReply = new PHPMailer(true);
        $autoReply->isSMTP();
        $autoReply->Host = "smtp.gmail.com";
        $autoReply->SMTPAuth = true;
        $autoReply->Username = "chivinsaing24@gmail.com"; // SMTP Gmail account
        $autoReply->Password = "azek qchb sssq utsx"; // Use environment variable or other secure method
        $autoReply->Port = 465;
        $autoReply->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $autoReply->setFrom('chivinsaing24@gmail.com'); // From your email
        $autoReply->addAddress($email); // Reply to user's email
        $autoReply->Subject = "Thank you for your message";
        $autoReply->isHTML(true);
        $autoReply->Body = "Dear $name,<br><br>Thank you for reaching out! We have received your message and will get back to you shortly.
                            <br><br>Best regards,<br>Your Company Name";

        $autoReply->send();

        $_SESSION['message'] = $message;


        // Redirect to thanks.php
        header('Location: thanks.php');
        exit;

    } catch (Exception $e) {
        $_SESSION['message'] = 'Email could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        header('Location: index.php'); // Change to your form page
        exit;
    }
}
?>
