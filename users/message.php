<?php
session_start();
require 'db.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $insert= "INSERT INTO `messages`( name,email, subject, message)VALUES('$name', '$email','$$subject','$message')";
    $insert_query=mysqli_query($db_connect,$insert);
    if($insert_query){
        header ('location:index.php');
    }
}

?>