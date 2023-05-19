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


    $query = mysqli_query($con, "INSERT INTO billing_address (b_product_name, b_email, b_address, b_phone, b_product,b_qty, b_total,b_payment_id,b_pay_amount,b_image,b_date,user) VALUES ('$name','$email','$address','$phone','$product','$qty','$total',' $payment_id','$total_amount','$img','$date','$user')");
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
        echo "<script>alert('Payment Not Successful'); </script>";
    }

?>