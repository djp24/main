<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "me@darapalmer.com";
    $headers = "From: ".$email; 
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");
}

/*
if (isset($email)) {
    echo 'Thank you for your message! I will get back to you as soon as possible!';
} else {
    echo 'Something went wrong. Please re-send your message.';
}*/