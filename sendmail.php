<?php


$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "sbeland@serpforce.ca";
$Subject = "New Message From StephaneBeland.com";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
mail($EmailTo, $Subject, $Body, "From:".$email) or die("Error!");
echo "Thank You for your message! I will get back to you in a jiffy";

?>
 
