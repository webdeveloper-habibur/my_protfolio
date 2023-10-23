<?php
session_start(); 
require '../db.php';
$title=$_POST['title'];
$short_description=$_POST['short_des'];
 
$insert="INSERT INTO services(title, short_des)VALUES('$title', '$short_description')";
mysqli_query($db_connect,$insert);
$_SESSION['successes']='ADD success';
header('location:service.php');
?>