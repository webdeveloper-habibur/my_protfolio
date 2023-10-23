<?php
session_start();
require 'db.php';

$name = $_POST['name'];
$email=$_POST['email'];
$password = $_POST['password'];
$after_hash=password_hash( $password , PASSWORD_DEFAULT);
$gender=$_POST['gender'];

$flag = false;
if(!$name){
    $flag=true; 
    $_SESSION['name_err']='Submmit Your Name';
   }

if(!$email){
    $flag=true; 
    $_SESSION['eml_err']='Submmit Your email';
   }

   else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $flage=true;
    $_SESSION['eml_err']='Plz Enter  your valid email';
    }
   }
   
   if(!$password){
    $flag=true; 
    $_SESSION['pass_err']='Submmit Your Password';
   }
   else{
    $upper= preg_match('@[A-Z]@',$password);
    $low= preg_match('@[a-z]@',$password);
    $number=preg_match('@[0-9]@',$password);
    $sumbole=preg_match('@[!, #,$,%,^,&,*,-,_,+]@', $password);
    
    if(!$upper ||!$low || !$number  ||!$sumbole|| strlen($password)<8 ) {
    $flage=true;
    $_SESSION['pass_err']='Enter upperCase; enter lowCase; enter number; enter spesal;and min 8 charecter'; 
    }

   }

   if(!$gender){
    $flag=true; 
    $_SESSION['gen_err']='Select Your Gender';
   }
 


   if($flag){
    header('location:register.php');  
}
else{
    $select= "SELECT COUNT(*) as paisi FROM users WHERE email='$email'";
    $select_query= mysqli_query($db_connect,$select);
    $after_assoc=mysqli_fetch_assoc($select_query);
    if($after_assoc['paisi']== 0){
        $insert= "INSERT INTO `users`( name, email, password, gender) VALUES ('$name', '$email','$after_hash','$gender')";
    mysqli_query($db_connect, $insert);
    $_SESSION['success']='Registration Successfully!!';
        header('location:register.php');
    }
    else{
        $_SESSION['exist']='Eamil Alredy exsist';
        header('location:register.php');
    }
    
   }
?>