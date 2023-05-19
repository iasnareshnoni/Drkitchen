<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

session_start();
if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
}
require 'vendor/autoload.php';

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

    $sql1 = "INSERT INTO order_details (order_product, order_qty, order_price, order_payment_id , order_total, order_date, order_user) VALUES ('$product','$qty','$total','$payment_id','$total_amount','$date','$user')";
    $sql1 .= "INSERT INTO billing_address1 (b_name, b_email, b_address, b_phone ,user) VALUES ('$name','$email','$address','$phone','$user')";

    $query = mysqli_multi_query($con,$sql1);

    print_r($query);
    die();

    // $query = mysqli_query($con, "INSERT INTO billing_address (b_product_name, b_email, b_address, b_phone, b_product,b_qty, b_total,b_payment_id,b_pay_amount,b_image,b_date,user) VALUES ('$name','$email','$address','$phone','$product','$qty','$total',' $payment_id','$total_amount','$img','$date','$user')");
    if($query){
         
        $mail = new PHPMailer(true);
       
       $mail->SMTPDebug = 0;									
       $mail->isSMTP();										
       $mail->Host	 = 'smtp.gmail.com;';				
       $mail->SMTPAuth = true;							
       $mail->Username = 'iasnareshnoni2@gmail.com';				
       $mail->Password = 'ljcwofpvbkyxxvjm';					
       $mail->SMTPSecure = 'tls';							
       $mail->Port	 = 587;
       
        $mail->setFrom('iasnareshnoni2@gmail.com');		
        $mail->addAddress($email);

        $mail->isHTML(true);								
        $mail->Subject = 'Dr Kitchen Order Details';
        $mail->Body = '<html>
        <body>
        // <p> '.$name .' <p>
        // <p> '.$email .'<p>
        // <p> ' .$address.' <p>
        // <p> Product Item: <span> ' . $product .'<span><p>
        // <p> Product Quantity: <span> ' . $qty .'<span><p>
        // <p> Product Price: <span> ' . $total .'<span><p>
        // <p> ' . $total_amount .'<p>
        // Your Order is Confirmed. <br>
        // '. $date .'

        <ul>
        <li><span>Circle symbol</span></li>
        <li><span>Square symbol</span></li>
        <li><span>Example text</span></li>
        <li><span id="demo">Click on me!</span></li>
        <button type="button" onclick="displayDate()">Display Date</button>
    
      </ul> 
    </body>
                     </html>' ;
        $mail->AltBody = '';
        $mail->send();
        if($mail){

            $mail->setFrom($email);		
            $mail->addAddress('iasnareshnoni2@gmail.com');
    
            $mail->isHTML(true);								
            $mail->Subject = 'Customer Order Detail';
            $mail->Body = '<html>
                                <body>
                                    <p> '.$name .' <p>
                                    <p> '.$email .'<p>
                                    <p> ' .$address.' <p>
                                    <p> Product Item: <span> ' . $product .'<span><p>
                                    <p> Product Quantity: <span> ' . $qty .'<span><p>
                                    <p> Product Price: <span> ' . $total .'<span><p>
                                    <p> ' . $total_amount .'<p>
                                    Your Order is Confirmed. <br>
                                    '. $date .'
                                </body> 
                         </html>' ;
            $mail->AltBody = '';
            $mail->send();
            
            $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
            echo json_encode($arr);
        }


    }else{
        echo "<script>alert('Query Failed.');</script>";
        echo "<script>alert('Payment Not Successful'); </script>";
    }

?>

