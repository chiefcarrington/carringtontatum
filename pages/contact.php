<?php

if($_POST["submit_message"]) {
    $recipient="carrington.tatum@gmail.com";
    $subject="Contact Form";
    //$sender=$_POST["sender"];
    //$senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $name=$_POST["name"];
    $email=$_POST["email"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    //$thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>