<?php
// if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "samduarte-davies@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$mailheader .= "Reply-To: $email \r\n";
// }
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
