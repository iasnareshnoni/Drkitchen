<?php
 include "config.inc.php";

 $qty = $_POST['qty'];
 $cart_id = $_POST['id'];
 $price = $_POST['price'];

 $u_total =  $qty *  $price;

 $update_cart = mysqli_query($con,"UPDATE cart SET cart_qty = $qty, cart_total = $u_total WHERE cart_id = $cart_id ");
if($update_cart){
    echo 1;
}else{
    echo 0;    
}

?>