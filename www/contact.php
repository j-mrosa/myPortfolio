<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['form-firstname'];
        $lastName = $_POST['for-lastname'];
        $mailFrom = $_POST['form-email'];
        $subject = $_POST['form-subject'];
        $message = $_POST['form-message'];

        $mailTo = "j.mrosa@outlook.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have a message from your portfolio contact form.\n\n" . 
                "Name: " . $firstName . " " . $lastName . "\nMessage:\n" . $message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: success.html");        

    }