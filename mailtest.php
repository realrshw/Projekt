<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/cpanelusername/PHPMailerTest/PHPMailer/src/Exception.php';
require '/home/cpanelusername/PHPMailerTest/PHPMailer/src/PHPMailer.php';
require '/home/cpanelusername/PHPMailerTest/PHPMailer/src/SMTP.php';

// Instantiation and passing [ICODE]true[/ICODE] enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'jamie.ml';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'no-reply@jamie.ml';                     // SMTP username
    $mail->Password   = '2KtwgnedC8JRv_2';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@jamie.ml', 'Mailer');
    $mail->addAddress('xmqn.mika@gmail.com', 'Mika');     // Add a recipient
    $mail->addAddress('');               // Name is optional
    $mail->addReplyTo('xmqn.mika@gmail.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('');         // Add attachments
    $mail->addAttachment('');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '###***TEST***###';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
