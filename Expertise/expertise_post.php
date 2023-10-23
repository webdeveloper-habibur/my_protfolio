<?php
session_start(); 
require '../db.php';
$topic_name=$_POST['topic_name'];
$persentange=$_POST['percentage'];
 
$insert="INSERT INTO expertises(topic_name, percentage)VALUES('$topic_name', '$persentange')";
mysqli_query($db_connect,$insert);
$_SESSION['success']='ADD success';
header('location:expertise.php');
?>