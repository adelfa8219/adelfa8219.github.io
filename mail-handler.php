<?php
if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$answer=$_POST['answer'];
$message=$_POST['message'];

$to='adelfabrito@yahoo.com';
$subject = 'Form Submission';
$txt ="Name: ".$name.  "\n"."Email: ".$email. "\n"."Message: ".$message."\n"."phone: ".$phone;
$headers ="From: ".$email;


if(mail($to, $subject, $txt, $headers)){
echo "<h1>Sent Sucessfully! Thank you"." ".$name."; I will contact you shortly!</h1>";
}
else{
echo "something went wrong!";
  }
}
?>
