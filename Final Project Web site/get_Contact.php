<?php

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "KanadaraCC@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo"message send";

?>