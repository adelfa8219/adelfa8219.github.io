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


if($email!=NULL){
mail($to,$subject,$txt,$phone);
}

//redirect
header("Location:thank-you.html");
?>
