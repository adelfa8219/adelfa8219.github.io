<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["name"]) ||
	empty($_POST["email"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$yesweb = $_POST["yesweb"];
$noweb = $_POST["noweb"];
$message = $_POST["message"];




mail( 'adelfabrito@yahoo.com' , 'New form submission' , 
"New form submission: Name: $name, Email:$email, Phone: $phone, Yes: $yesweb, No: $noweb, Message: $message"  );

header('Location: thank-you.html');

?>
