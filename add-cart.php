<?php
    session_start();

    if(isset($_SESSION['email'])){

        $user = $_SESSION['email'];

        include "config.inc.php";

        // if(isset($_GET['id'])){
        $pid = $_POST['id'];
       

        $select = mysqli_query($con,"SELECT * FROM product WHERE p_id = $pid");
     if(mysqli_num_rows($select) > 0){
      while($res = mysqli_fetch_assoc($select)){

    $p_name = $res['p_name'];
    $image = $res['p_image'];
    $p_price = $res['p_price'];
    $p_qty = $res['p_qty'];
    $total = $p_qty * $p_price;
     
    }

    $check = mysqli_query($con,"SELECT * FROM cart WHERE product_name = '$p_name' && cart_user = '$user' ");
   
    if( mysqli_num_rows($check) > 0){
      echo 0;
    }else{
      $query = mysqli_query($con,"INSERT INTO `cart`(`product_name`, `cart_qty`, `cart_price`, `cart_user`, `cart_total`,`cart_image`) VALUES ('$p_name','$p_qty','$p_price','$user','$total','$image')");
      if($query){
        echo 1;
      }else{
       
      }
    }
    }
    // }
  }else{
    header('location:login.php');
  }
?>