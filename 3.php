<?php // SendMailSmtpClass + smtp.mail.ru
include_once("SendMailSmtpClass.php");

$username = "polina_a_00@internet.ru";
$password = "fziruhux7jhcGy7m5bjR";
$host = "ssl://smtp.mail.ru";
$from = "polina_a_00@internet.ru";
$port = "465";
$charset = "UTF-8";

$smtp = new SendMailSmtpClass($username, $password, $host, $from, $port, $charset);

$mailTo = 'polina8277@mail.ru';
$subject = 'Test';
$message = "Test message";
$headers = "From: polina_a_00@internet.ru\r\nReply-To: polina_a_00@internet.ru\r\nContent-Type: text/plain; charset=UTF-8\r\n";

echo $smtp->send($mailTo, $subject, $message, $headers);