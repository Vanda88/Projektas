<?php
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "baublyte.vanda@gmail.com";
                $subject = "New message";
                $author = 'From: ' . $name . ', ' . $email;
                $text = htmlspecialchars($message);
                mail($to, $subject, $author, $text, $from);
                echo "<script>alert('Thank you for your message. We will get back to you shortly.');</script>";
            }
        }
include('db.php');
}
