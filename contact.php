<?php


$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'austinstan24@gmail.com';
    $subject = $subject;
    $message = $message;
    $name = $name;
    $from = $email;

    $headers = 'From: YourLogoName info@domain.com' . "\r\n";
    $headers .= 'Reply-To: ' . $to . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Your mail has been sent successfully.';
    } else {
        echo 'Unable to send email. Please try again.';
    }
}
