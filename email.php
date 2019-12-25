<?php
if(isset($_POST['email'])) {

// Email and subject.
$email_to = "emailaddress";
$email_subject = "Mint Makeup & Beauty Enquiry";        

$fname = $_POST['fname']; // required
$lname = $_POST['lname']; // required
$message = $_POST['message']; // required
$email_from = $_POST['email']; // required

// create email content
$email_content = "From:"." ".$fname." ".$lname."\n"."Email:"." ".$email_from."\n"."Message:"." ".$message; 

//mail
mail($email_to, $email_subject, $email_content);

}
//return to contact page after submit.
header("location:contact.php");
?>