<?php 
session_start();
if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
}
require_once "config.inc.php";

   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $product = implode(", ",$_POST['product_id']);
   $total = implode(", ",$_POST['product_amount']);
   $qty = implode(", ",$_POST['product_qty']);
   $img = implode(", ",$_POST['product_img']);
   $payment_id = $_POST['razorpay_payment_id'];
   $total_amount = $_POST['totalAmount'];
   $date = date('Y-m-d H:i:s');


    $query = mysqli_query($con, "INSERT INTO billing_address (b_product_name, b_email, b_address, b_phone, b_product,b_qty, b_total,b_payment_id,b_pay_amount,b_image,b_date,user) VALUES ('$name','$email','$address','$phone','$product','$qty','$total',' $payment_id','$total_amount','$img','$date','$user')");
    if($query){
        $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
        echo json_encode($arr);
    }else{
        echo "<script>alert('Payment Not Successful'); </script>";
    }

?>

