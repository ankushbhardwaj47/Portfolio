<?php
//get data from form  
$name = $_POST['fname.lname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "ankushbhardwaj0631@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: ankushbhardwaj47.github.io/Portfolio/" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>