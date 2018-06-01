<?php
if (isset($_POST['submit'])) {
	$to = 'muhammadsalahuddin@me.com';
	$subject = 'Feedback from Beachcreek';
	$message = 'Name:'	$_POST['name'] .	"\r\n\r\n";
	$message .= 'Email:' . $_POST['email'] . "\r\n\r\n";
	$message .= 'Comments:' . $_POST['comments']; 
	echo $message;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Thank You</h1>
	<p>Your message has been sent.</p>
	<h1>Opps!</h1>
	<p>Sorry, there was a problem sending your message.</p>

</body>
</html>
