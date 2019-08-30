<?php
require'lab.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($db_con,"SELECT*FROM LOGIN WHERE USERNAME="$username"AND password="$password"");
$result=mysql_fetch_array($sql,MYSQLI_Assoc);
if(empty($result['username'])){
    echo"login error".
    "<a href="login.php">Try again</a";

}
else echo"login succes!";















