<?php
require_once "Mail.php";
$from = "Sandra Sender <sandra@yesdaddy.in>";
$to = "Ramona Recipient <ksantanu@yesdaddy.in>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "smtp.gmail.com";
$port = "587";
$username = "sandra@yesdaddy.in";
$password = "Poiu@1212";
$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'port' => $port,
'username' => $username,
'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {echo("" . $mail->getMessage() . "");} else {echo("Message successfully sent!
");echo phpinfo();
}
?>