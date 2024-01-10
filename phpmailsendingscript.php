<?php
require_once "Mail.php";
$from = "Sandra Sender ";
$to = "Ramona Recipient ";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "mail.yourdomain.com";
$username = "test@yourdomain.com";
$password = "1234";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("
" . $mail->getMessage() . "

");
 } else {
  echo("
Message successfully sent!

");
 }
?>

 