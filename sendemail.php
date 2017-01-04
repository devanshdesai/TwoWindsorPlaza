<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $business = $_POST['business'];
    $message = $_POST['message'];

    $from = 'From: Two Windsor Plaza <leasing@twowindsorplaza.com>\r\n';
	$to = "leasing@twowindsorplaza.com";
    $subject = "Contact Us Submission - Two Windsor Plaza";
    $body = "Here is the contact form submission information:\n\Name:\n $name\n\n E-Mail:\n $email\n\n Phone:\n $phone\n\n Business:\n $business\n\n Message:\n $message";

	$userto = "$email";
	$usersubject = "Thank you, from Two Windsor Plaza.";
    $userbody = "Dear $name,\n\nWe have received your response from the Two Windsor Plaza Contact Us form and will be in touch shortly.\n\nIf you have any further questions, please do not hesitate to ask us.\n\nYou can simply reply to this email at leasing@twowindsorplaza.\n\nSincerely,\nThe Two Windsor Plaza Team";
}

if ( mail($to, $subject, $body, $from) && mail($userto, $usersubject, $userbody, $from) )
{
    echo "<h3>Thank you. Your response was received. You can now close this tab.</h3>";
}
else
{
    echo "<h3>Sorry, there was an error sending your response. Please try again. If the problem persits, please contact Two Windsor Plaza via another method.</h3>";
}

?>
