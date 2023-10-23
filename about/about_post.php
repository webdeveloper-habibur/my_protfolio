<?php
session_start(); 
require '../db.php';
$nick_name=$_POST['nick_name'];
$name=$_POST['name'];
$Designation=$_POST['Designation'];
$short_description=$_POST['short_description'];
$image=$_FILES['image'];

if($image['name'] == ''){

    $update=" UPDATE abouts SET nick_name='$nick_name', name='$name', Designation='$Designation', short_description='$short_description' WHERE id=1";
    $update_res=mysqli_query($db_connect,$update);
    $_SESSION['emg']='Update successfully!!';
    header('location:about.php');
}
else{ 
   
$after_explore=explode('.',$image['name']);
$extension=end($after_explore);
$allowed_extension= ['jpg','png','mp4','webp'];
$select_image="SELECT * FROM abouts WHERE id=1";
$select_image_res=mysqli_query($db_connect,$select_image);
$after_assoc=mysqli_fetch_assoc($select_image_res);

if(in_array($extension,$allowed_extension)){
    if($image['size'] <= 5120000){
        $delete_form='../uploads/about/'.$after_assoc['image'];
        unlink($delete_form);
        
      $file_name= 'image'.'.'.$extension;
       $new_location ='../uploads/about/'.$file_name;
       move_uploaded_file($image['tmp_name'],$new_location);
       $update="UPDATE abouts SET nick_name='$nick_name', name='name', Designation='$Designation', short_description='$short_description',image='$file_name' WHERE id=1";
       $update_res=mysqli_query($db_connect,$update);

       $_SESSION['emg']='Update successfully!!';
       header('location:about.php');
    }
    else{
        $_SESSION['extand']='Maximum image size';
    header('location:about.php');
    }
}
else{
    $_SESSION['extand']='Image must be type of jpg, png,webp';
    header('location:about.php');
}

}

?>