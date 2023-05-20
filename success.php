<?php
session_start();
 
include "config.inc.php";
 
if(isset($_SESSION['email'])){
  $user = $_SESSION['email'];
  $delete_cart = mysqli_query($con,"DELETE FROM cart WHERE cart_user = '$user'");
  if($delete_cart){
    header('location:index.php');
  }
}else{
    $user = "";
    echo "<script>alert('Something Went Wrong');</script>";
}
?>
