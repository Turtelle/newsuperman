<!DOCTYPE html>
<html>
<head>
<META HTTP-EQUIV="refresh" content="0;URL=prayerThank.html"
</head>


<?php
	
include("index.html");	
// Check for empty fields
if ( //empty( $_POST[ 'name' ] ) ||
	//empty( $_POST[ 'email' ] ) ||
	//empty( $_POST[ 'phone' ] ) ||
	//empty( $_POST[ 'message' ] ) ||
	!filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) ) {
	echo "No arguments Provided!";
	return false;
}

//$name = strip_tags( htmlspecialchars( $_POST[ 'name' ] ) );
$email_address = strip_tags( htmlspecialchars( $_POST[ 'email' ] ) );
//$phone = strip_tags( htmlspecialchars( $_POST[ 'phone' ] ) );
//$message = strip_tags( htmlspecialchars( $_POST[ 'message' ] ) );

// Create the email and send the message
$to = 'janineb@newsuperman.org'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  Rhapsody Request";
$email_body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $email_address:";
$headers = "From:noreply@newsuperman.org"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail( $to, $email_subject, $email_body, $headers );
return true;
?>
	</html>