Thank you for your message!

<?php
	
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];
	$to 			= "michaelhern@hotmail.com";
	$subject 		= $_POST['category'];
	$body 			= "Information Submitted:";
	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;
	mail($to, $subject, $body);
?>
