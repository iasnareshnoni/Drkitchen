<?php

$host = "localhost";
$dbuser = "root";
$pass = "";
$db = "drkitchen";
 
$con = mysqli_connect($host,$dbuser,$pass,$db);

if(!$con){
   echo "<script>alert('Database Connection Error');</script>";
}
?>