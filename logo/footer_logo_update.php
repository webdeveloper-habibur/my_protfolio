<?php 
session_start();
require '../db.php';
$footer_logo=$_FILES['footer_logo'];
$after_explore=explode('.',$footer_logo['name']);
$extension=end($after_explore);
$allowed_extension= ['jpg','png','mp4','webp'];

$select_logo="SELECT * FROM logos WHERE id=2";
$select_logo_res=mysqli_query($db_connect,$select_logo);
$after_assoc=mysqli_fetch_assoc($select_logo_res);


if(in_array($extension,$allowed_extension)){
    if($footer_logo['size'] <= 5120000){
        $delete_form='../uploads/logo/'.$after_assoc['footer_logo'];
      unlink($delete_form);


      $file_name= 'footer_logo'.'.'.$extension;
       $new_location ='../uploads/logo/'.$file_name;
       move_uploaded_file($header_logo['tmp_name'],$new_location);
       $update="UPDATE logos SET footer_logo='$file_name' WHERE id=2 ";
       mysqli_query($db_connect,$update);

       $_SESSION['footer_logo']='Header logo Update successfully!!';
       header('location:logo.php');
    }
    else{
        $_SESSION['extand']='Maximum image size';
    header('location:logo.php');
    }
}
else{
    $_SESSION['extand']='Image must be type of jpg, png,webp';
    header('location:logo.php');
}

?>

























<!-- <?php 
session_start();
require '../db.php';
$footer_logo=$_FILES['footer_logo'];
$after_explore=explode('.',$footer_logo['name']);
$extension=end($after_explore);
$allowed_extension= ['jpg','png','mp4','webp'];

$select_logo="SELECT * FROM logos WHERE id=1";
$select_logo_res=mysqli_query($db_connect,$select_logo);
$after_assoc=mysqli_fetch_assoc($select_logo_res);


if(in_array($extension,$allowed_extension)){
    if($footer_logo['size'] <= 5120000){
        $delete_form='../uploads/logo/'.$after_assoc['footer_logo'];
        unlink($delete_form);
        

      $file_name= 'footer_logo'.'.'.$extension;
       $new_location ='../uploads/logo/'.$file_name;
       move_uploaded_file($footer_logo['tmp_name'],$new_location);
       $update="UPDATE logos SET footer_logo='$file_name' WHERE id=2 ";
       mysqli_query($db_connect,$update);

       $_SESSION['footer_logo']='Footer logo Update successfully!!';
       header('location:logo.php');
    }
    else{
        $_SESSION['extand']='Maximum image size';
    header('location:logo.php');
    }
}
else{
    $_SESSION['extand']='Image must be type of jpg, png,webp';
    header('location:logo.php');
}

?> -->







