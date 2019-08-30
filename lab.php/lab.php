<?php
$host="localhost";
$username="root";
$password="";
$database="trap";
$dbcon=mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_errno()){
    echo"failed to connect to database:". mysqli_connect_error();
    exit;
}
else echo"connected to database!";
?>