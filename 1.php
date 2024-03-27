<?php
$headers = 'From: polina8277@mail.ru' . "\r\n" . 'Reply-To: polina8277@mail.ru' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$to = "pelagea946@gmail.com";
$subject = "Test";
$message = "Test message";
if (mail($to, $subject, $message, $headers)) {
    echo 'OK';
} else {
    echo 'ERROR';
}