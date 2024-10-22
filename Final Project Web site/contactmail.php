<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["fullname"];
    $contact= $_POST["contact"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];
    $to = "kanadarawacc@gmail.com";
    $headers = "From: $email";

    if(mail($to,$subject,$message,$headers)){
        echo "Email Sent";  
    }else{
        echo "Email sending failed";
    }
}

?>