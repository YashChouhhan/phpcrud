<?php
$servername='127.0.0.1:4306';
$username='root';
$password='';
$dbname='crud';

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "DB Connected Succesfully";
}else{
    echo "connection failed".mysqli_connect_error();
}
?>