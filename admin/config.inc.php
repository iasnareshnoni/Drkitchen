<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "drkitchen";
 
$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
   echo "<script>alert('Database Connection Error');</script>";
}
?>