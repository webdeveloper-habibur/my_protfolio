<?php
require '../db.php';

$id=$_GET['id'];

$select="SELECT * FROM expertises WHERE id=$id";
$select_query=mysqli_query($db_connect,$select);
$after_assoc=mysqli_fetch_assoc($select_query);



echo $after_assoc['status'];

if($after_assoc['status'] == 1){
    $update="UPDATE expertises SET status=0 WHERE id=$id ";
    mysqli_query($db_connect,$update);
    $_SESSION['success']='Expertise add success!!';
    header('location:expertise.php');
}
else{
    $update="UPDATE expertises SET status=1 WHERE id=$id ";
    mysqli_query($db_connect,$update);
    header('location:expertise.php');
}

?>