<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

session_start();

$email = $_POST['email'];
$_SESSION['signup_data'] = $_POST; // Store all form data temporarily

$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'arjun.gandreddi2005@gmail.com'; // your email
    $mail->Password = 'shep fkjj wuwg rlxi';   // App password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('yourgmail@gmail.com', 'SkillHire OTP');
    $mail->addAddress($email);
    $mail->isHTML(true);

    $mail->Subject = 'Your SkillHire OTP';
    $mail->Body    = "<h3>Your OTP is: $otp</h3><p>Do not share this with anyone.</p>";

    $mail->send();
    header("Location: verify_otp.php");
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>