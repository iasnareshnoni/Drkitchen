<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

session_start();
if(isset($_SESSION['email'])){
    $user = $_SESSION['email'];
    $user_name = $_SESSION['name'];
    $user_mobile = $_SESSION['mobile'];
}
require 'vendor/autoload.php';

require_once "config.inc.php";

   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['pin'] ." ". $_POST['address'];
   $phone = $_POST['phone'];
   $product = implode(", ",$_POST['product_id']);
   $total = implode(", ",$_POST['product_amount']);
   $qty = implode(", ",$_POST['product_qty']);
   $img = implode(", ",$_POST['product_img']);
   $payment_id = $_POST['razorpay_payment_id'];
   $total_amount = $_POST['totalAmount'];
   $date = date('Y-m-d H:i:s');
   $order_PIN = "#DRODER" . rand(1,100000);


    $sql1 = "INSERT INTO order_details (order_product, order_qty, order_price, order_payment_id , order_total, order_date, order_user) VALUES ('$product','$qty','$total','$payment_id','$total_amount','$date','$user');";
    $sql1 .= "INSERT INTO billing_address1 (b_name, b_email, b_address, b_phone ,user) VALUES ('$name','$email','$address','$phone','$user')";

    $query = mysqli_multi_query($con,$sql1);
         
   
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
        $mail->Subject = 'Dr Kitchen Your Order Details:';
        $mail->Body = '<html>
        <body>                              
        <section style="margin-bottom: 19rem;margin-top: 0rem; border-collapse: collapse; width: 100%">
        <div class="container">
            <div class="main-email-table">
                <h2 style="border-bottom: 1px solid black;color:#000;">Your Order</h2>
                <div class="order-details" style="margin-top: 10px;padding-top: 1px solid black;margin-bottom: 10px;border-bottom: 1px solid black;">
                    <table style="font-family: arial, sans-serif;">
                        <tr>
                            <th style="border: 1px solid #dddddd; text-align: left; width:100%; padding:8px; color: #000;">ORDER NUMBER:<span>' .$order_PIN . '</span> </th>
                        </tr>
                     
                        <tr style="background-color: #dddddd;">
                            <th style="border: 1px solid #dddddd; text-align: left; width:100%; padding:8px; color: #000;">DATE:<span>' . $date .'</span> </th>
                        </tr>
                    </table>
                </div>
                <div class="product-details" style="border-bottom: 1px solid black;padding-bottom: 10px;">
                    <table>
                        <tr>
                            <th style="border-bottom: 2px solid white; text-align: left; width:100%; padding:8px; color: #000; width:100%">Delivery To</th>
                        </tr>
                        <tr>
                            <td>Name: '.$user_name.'</td>
                        </tr>
                        <tr>
                            <td>Email: ' .$user. '</td>
                        </tr>
                        <tr>
                            <td>Phone No: '. $user_mobile .'</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                          <th style="border-bottom: 2px solid white; text-align: left; width:100%; padding:13px 0px; color: #000;">Billing Details</th>
                       </tr>
                       <tr>
                         <td>Name: '.$name.'</td>
                        </tr>
                        <tr>
                            <td>Email: ' .$email. '</td>
                        </tr>
                        <tr>
                          <td>Address: ' .$address .'</td>
                        </tr>
                        <tr>
                          <td>Phone: '. $phone .'</td>
                        </tr>
     
                    </table>
                </div>
                <!-- which product you buy -->
                <div class="product-buy" style="padding:15px 0px; border-bottom: 1px solid black;">
                    <table>
                        <tr>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Product</th>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Qty</th>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Each</th>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Total</th>
                        </tr>
                        <tr>
                        <td style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">' . $product. '</td>
                        <td style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">' . $qty. '</td>
                        <td style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">' . $total. '</td>
                        </tr>
                    </table>
                </div>
     
                <div class="total-price">
                <table>
                        <tr>
                            <th>Total Amount:</th>
                            <th>'.$total_amount .'</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
     </section>
        </body> 
            </html>';
        $mail->AltBody = '';
        $mail->send();
        if($mail){

            $mail->setFrom($email);		
            $mail->addAddress('iasnareshnoni2@gmail.com');
    
            $mail->isHTML(true);								
            $mail->Subject = 'Customer Order';
            $mail->Body = '<html>
            <body>
                                
        <section style="margin-bottom: 19rem;margin-top: 0rem; border-collapse: collapse; width: 100%">
        <div class="container">
            <div class="main-email-table">
                <h2 style="border-bottom: 1px solid black;color:#000;">Order Confirmation</h2>
                <div class="order-details" style="margin-top: 10px;padding-top: 1px solid black;margin-bottom: 10px;border-bottom: 1px solid black;">
                    <table style="font-family: arial, sans-serif;">
                        <tr>
                            <th style="border: 1px solid #dddddd; text-align: left; width:100%; padding:8px; color: #000;">ORDER NUMBER:<span>' .$order_PIN . '</span> </th>
                        </tr>
                     
                        <tr style="background-color: #dddddd;">
                            <th style="border: 1px solid #dddddd; text-align: left; width:100%; padding:8px; color: #000;">DATE:<span>' . $date .'</span> </th>
                        </tr>
                    </table>
                </div>
                <div class="product-details" style="border-bottom: 1px solid black;padding-bottom: 10px;">
                    <table>
                        <tr>
                            <th style="border-bottom: 2px solid white; text-align: left; width:100%; padding:8px; color: #000; width:100%">Delivery To</th>
                        </tr>
                        <tr>
                            <td>Name: '.$user_name.'</td>
                        </tr>
                        <tr>
                            <td>Email: ' .$user. '</td>
                        </tr>
                        <tr>
                            <td>Phone No: '. $user_mobile .'</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                          <th style="border-bottom: 2px solid white; text-align: left; width:100%; padding:13px 0px; color: #000;">Billing Details</th>
                       </tr>
                       <tr>
                         <td>Name: '.$name.'</td>
                        </tr>
                        <tr>
                            <td>Email: ' .$email. '</td>
                        </tr>
                        <tr>
                          <td>Address: ' .$address .'</td>
                        </tr>
                        <tr>
                          <td>Phone: '. $phone .'</td>
                        </tr>
     
                    </table>
                </div>
                <!-- which product you buy -->
                <div class="product-buy" style="padding:15px 0px; border-bottom: 1px solid black;">
                    <table>
                        <tr>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Product</th>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Qty</th>
                            <th style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">Total</th>
                        </tr>
                        <tr>
                        <td style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">' . $product. '</td>
                        <td style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">' . $qty. '</td>
                        <td style="border: 1px solid #dddddd; text-align: left; width:50%; padding:8px; color: #000; width:29%">' . $total. '</td>
                        </tr>
                    </table>
                </div>
     
                <div class="total-price">
                <table>
                        <tr>
                            <th>Total Amount:</th>
                            <th>'.$total_amount .'</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
       </section>
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

