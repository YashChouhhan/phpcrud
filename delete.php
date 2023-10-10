<?php
include("connection.php");
$id=$_GET['id'];

$query="DELETE FROM crud WHERE id='$id'";
header('Location: display.php');

$data=mysqli_query($conn,$query);

if($data){
    echo "recordes delete";
}else{
    echo "failed";
}
?>