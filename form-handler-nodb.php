<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "info@haslovi.cz"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$headers = "From:" . $email;
$headers2 = "From:" . $myemail;

// this is to be used as the fifth parameter of the 'mail function
// which ensures proper filling out of the "from" field of the email
$from = "-f " . $email;

// set up email
$msg = "Gratulace, mate novou zpravu!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email . "\n\nText zpravy:\n\n" . $message;
$msg = wordwrap($msg,70);
mail($myemail,"Nový vzkaz z haslovi.cz",$msg,$headers);
mail($email,"Děkujeme za Váš vzkaz!",$msg,$headers2);
echo 'Děkujeme za váš vzkaz.  Prosím <a href="index.html">klikněte sem pro návrat na naše stránky.</a>';
?>
