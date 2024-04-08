<?php // SendMailSmtpClass + mailsnag
include_once("SendMailSmtpClass.php");

$username = "Rti2paBWiMuH";
$password = "H2kB2ibz5zMR";
$host = "smtp.mailsnag.com";
$from = "elvis@example.com";
$port = "2525";
$charset = "UTF-8";

$smtp = new SendMailSmtpClass($username, $password, $host, $from, $port, $charset);

$mailTo = "chuck@example.com";
$subject = "Test";
$message = "Test message";
$headers = "To: Chuck Berry <chuck@example.com>\r\nReply-To: elvis@example.com\r\nContent-Type: text/plain; charset=UTF-8\r\n";

echo $smtp->send($mailTo, $subject, $message, $headers);