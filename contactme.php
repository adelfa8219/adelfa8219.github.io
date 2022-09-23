<?php

//get data from form
	
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$answer = $_POST["answer"];
$message = $_POST["message"];

$to = "adelfabrito@yahoo.com";


$subject = "Mail from Recruiter";
$txt ="Name = ". $name .  "\r\n Email = " . $email . "r\n\ Message =" . "$message ." \r\n phone =" . $phone;

$headers = "From: adelfahernandez@gmail.com" . "\r\n" .
"CC: adelfabrito@yahoo.com";

if($email!=NULL){
mail($to,$subject,$txt,$phone, $headers);
header("Location:thankyou.html");}
?>
