<?php
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

$messages= "Student Name: " . $name . "\n"
 . "Email id of student : " . $email . "\n"
 . "Message: " . "\n" . $_POST['message'];
if(empty($name)){
    echo "Please fill your name";
}
if(empty($email)){
    echo "Please fill your email";
}
if(!((empty($name))&&(empty($email))&&(empty($messages)))){
    mail("maria.morris@admin.iith.ac.in",$messages,"From: $name<$email>");
    mail("pyukti.rastogi@admin.iith.ac.in","Student approach",$messages,"From: $name<$email>");
    mail("phani.bhushan@admin.iith.ac.in","Student approach",$messages,"From: $name<$email>");
    
}
?>