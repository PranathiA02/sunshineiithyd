<?php
$exp=$_REQUEST['exp'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phonenumber=$_REQUEST['phonenumber'];
$message=$_REQUEST['message'];
$mailheaders="Name:".$name.
"\r\nExperience:".$exp.
"\r\nEmail address:".$email.
"\r\nContact Number:".$phonenumber.
"\r\nmessage:".$message;

$messages= "Student Name: " . $name . "\n"
 . "Email id of student : " . $email . "\n"
 . "Contact of student : " . $phonenumber . "\n"
 ."Experience:".$exp."\n"
 . "Message: " . "\n" . $_POST['message'];

if(empty($name)){
    echo "Please fill your name";
}
if(empty($email)){
    echo "Please fill your email";
}
if(!((empty($name))&&(empty($email))&&(empty($message)))){
    mail("maria.morris@admin.iith.ac.in","Feedback message from a student",$messages,"From: $name<$email>");
    mail("pyukti.rastogi@admin.iith.ac.in","Feedback message from a student",$messages,"From: $name<$email>");
    mail("phani.bhushan@admin.iith.ac.in","Feedback message from a student",$messages,"From: $name<$email>");
    
}
?>