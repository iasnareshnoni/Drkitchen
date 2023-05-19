<?php

    include "config.inc.php";
    $status = $_POST['value'];
    $id = $_POST['id'];

    $update_status = mysqli_query($con,"UPDATE billing_address SET b_status = $status WHERE b_id = $id");

    if($update_status){
        echo 1;
    }else{
        echo 0;
    }


?>