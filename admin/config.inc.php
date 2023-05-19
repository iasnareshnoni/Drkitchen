<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "drkitchen";
 
$con = mysqli_connect($host,$dbuser,$dbpass,$db);

if(!$con){
   echo "<script>alert('Database Connection Error');</script>";
}
?>