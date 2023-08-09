<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp-servmail4arkonsoft.super-host.pl';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'sgrzybowski.servmail4arkonsoft';
    $mail->Password = 'qLLo05qF7vzKR';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('sgrzybowski@arkonsoft.pl', 'Mailer');
    $mail->addAddress($_POST['Email']);

    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent' . '                                                    ';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// echo $_POST['FirstName'];

// echo '      ' . $_POST['LastName'];

// echo '      '  . $_POST['Email'];

// echo '      ' . $_POST['Tel'];

// echo '      ' . $_POST['Radio'];

// echo '      ' . $_POST['Message'];
