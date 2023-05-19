<?php
  include "config.inc.php";
  if(isset($_GET['id'])){
    $d_id = $_GET['id'];

    $delete = mysqli_query($con,"DELETE FROM cart WHERE cart_id = $d_id");
    if($delete){
        header('location:cart.php');
    }else{
        header('location:cart.php');
    }
}
?>