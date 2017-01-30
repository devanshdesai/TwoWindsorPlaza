<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $business = $_POST['business'];
    $message = $_POST['message'];

    $from = "From: Two Windsor Plaza <leasing@twowindsorplaza.com>\r\n";
	$to = "windsor2@ptd.net";
    $subject = "Contact Us Submission - Two Windsor Plaza";
    $body = "Here is the contact form submission information:\n\n\tName:\n\t$name\n\n\tE-Mail:\n\t$email\n\n\tPhone:\n\t$phone\n\n\tBusiness:\n\t$business\n\n\tMessage:\n\t$message";

	$userto = "$email";
	$usersubject = "Thank you, from Two Windsor Plaza.";
    $userbody = "Dear $name,\n\nWe have received your response from the Two Windsor Plaza Contact Us form and will be in touch shortly.\n\nIf you have any further questions, please do not hesitate to ask us. You can simply reply to this email at leasing@twowindsorplaza.\n\nSincerely,\nThe Two Windsor Plaza Team";
}

if ( mail($to, $subject, $body, $from) && mail($userto, $usersubject, $userbody, $from) )
{
    header("Location: success.html");
}
else
{
    header("Location: error.html");
}

?>
