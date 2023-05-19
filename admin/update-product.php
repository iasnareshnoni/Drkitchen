<?php
include "config.inc.php";

if(isset($_POST['u_submit'])){
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $id = $_POST['u_id'];

    $query = mysqli_query($con, "UPDATE product SET p_name = '$title', p_desc = '$desc', p_price = '$price', p_status = $status WHERE p_id = $id");
    if($query){
        header('location:product.php');
    }else{
        header('location:product.php');
    }

}elseif(isset($_POST['d_submit'])){
    $id = $_POST['d_id'];
  $query = mysqli_query($con, "DELETE FROM product WHERE p_id = $id");

  header('location:product.php');
}
?>