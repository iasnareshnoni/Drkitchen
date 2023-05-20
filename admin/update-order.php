<?php

    include "config.inc.php";
    $status = $_POST['value'];
    $id = $_POST['id'];

    $update_status = mysqli_query($con,"UPDATE order_details SET order_status = $status WHERE order_id = $id");

    if($update_status){
        echo 1;
    }else{
        echo 0;
    }


?>