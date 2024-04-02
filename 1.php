<?php // mail()
$headers = "From: polina8277@mail.ru\r\nReply-To: polina8277@mail.ru\r\nContent-type: text/plain; charset=UTF-8\r\nX-Mailer: PHP/" . phpversion();
$to = "pelagea946@gmail.com";
$subject = "Test";
$message = "Test message";
if (mail($to, $subject, $message, $headers)) {
    echo 'OK';
} else {
    echo 'ERROR';
}