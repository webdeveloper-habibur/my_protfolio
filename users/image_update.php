<?php
session_start();
require '../db.php';
$id=$_SESSION['user_id'];
$image=$_FILES['image'];
$after_explore=explode('.',$image['name']);
$extension=end($after_explore);
$allowed_extension=['jpg','png','mp4','webp'];
$user="SELECT * FROM users WHERE id=$id";
$user_res=mysqli_query($db_connect,$user);
$after_assoc=mysqli_fetch_assoc($user_res);
if($after_assoc['image']== null){
    if(in_array($extension,$allowed_extension)){
        if($image['size']<=51200000000000){
          $file_name= $id. '.'.$extension;
           $new_location ='../uploads/user/'.$file_name;
           move_uploaded_file($image['tmp_name'],$new_location);
           $update="UPDATE users SET image='$file_name' WHERE id=$id ";
           mysqli_query($db_connect,$update);
           $_SESSION['photo_update']='Photo Update successfully!!';
           header('location:profile.php');
        }
        else{
            $_SESSION['extand']='Maximum image size';
        header('location:profile.php');
        }
    }
    
    else{
        $_SESSION['extand']='Image must be type of jpg, png,webp';
        header('location:profile.php');
    }
    
}
else{
    
    if(in_array($extension,$allowed_extension)){
        if($image['size']<=51200000000000){
            $delete_form='../uploads/user/'.$after_assoc['image'];
            unlink($delete_form);
          $file_name= $id. '.'.$extension;
           $new_location ='../uploads/user/'.$file_name;
           move_uploaded_file($image['tmp_name'],$new_location);
           $update="UPDATE users SET image='$file_name' WHERE id=$id ";
           mysqli_query($db_connect,$update);
           $_SESSION['photo_update']='Photo Update successfully!!';
           header('location:profile.php');
        }
        else{
            $_SESSION['extand']='Maximum image size';
        header('location:profile.php');
        }
    }
    else{
        $_SESSION['extand']='Image must be type of jpg, png,webp';
        header('location:profile.php');
    }
}




?>