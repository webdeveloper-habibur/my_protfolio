<?php
session_start(); 
require '../db.php';
$title=$_POST['title'];
$catagory=$_POST['catagory'];
$image=$_FILES['image'];

$after_explore=explode('.',$image['name']);
$extension=end($after_explore);
   
$file_name= 'portfolio'. '-'. rand(10000,20000).'.'.$extension;
$new_location ='../uploads/portfolio/'.$file_name;
move_uploaded_file($image['tmp_name'],$new_location);



$insert="INSERT INTO portfolios(title, catagory ,image)VALUES('$title', '$catagory', '$file_name')";
mysqli_query($db_connect,$insert);
$_SESSION['successes']='Add success';
header('location:portfolio.php');
?>