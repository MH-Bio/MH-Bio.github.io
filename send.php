<?php
 
if($_POST) {
    $name = "";
    $email = "";
    $category = "";
    $message = "";
     
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['$email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['category'])) {
        $category = filter_var($_POST['category'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['message'])) {
        $message = htmlspecialchars($_POST['message']);
    }
     
    if($category == "Collaborative Opportunities") {
        $recipient = "michaelhern@hotmail.com";
    }
    else if($category == "Employment") {
        $recipient = "michaelhern@hotmail.com";
    }
    else if($category == "Networking") {
        $recipient = "michaelhern@hotmail.com";
    }
    else {
        $recipient = "michaelhern@hotmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
     
    if(mail($recipient, $category, $message, $headers)) {
        echo "<p>Thank you for your message!</p>";
    } else {
        echo '<p>Sorry, but your email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>
