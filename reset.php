<?php 
  session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';
  include "config.inc.php";
  $msg = '';
  $msg1 = '';
  if(isset($_POST['submit'])){
    $email = $_POST['email'];

    if( $email == ''){
        $msg = "Please Enter Email Address.";
    }else{
    $otp = rand(100000,999999);

    $select = mysqli_query($con,"SELECT * FROM user WHERE user_email = '$email'");
    if( mysqli_num_rows($select) > 0){

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
        $mail->Subject = 'Reset Your Password';
        $mail->Body = $otp;
        $mail->AltBody = 'Your password Here';
        $mail->send();
        if($mail){
            setcookie('OTP', $otp, time() + 300);
            setcookie('user', $email, time() + 300);
            $msg = "OTP is Sent to Your Email Address.";
          }else{
            echo "<script>
                  alert('Something Error to sent mail.');              
            </script>";
          }
        }else{
         $msg = 'Email is Not Registerd.';
        }
    }
}
   elseif(isset($_POST['submit1'])){
         $check_otp = $_POST['otp'];
         
         if(isset($_COOKIE['OTP'])){
             $new_otp = $_COOKIE['OTP'];

             if( $check_otp == $new_otp){
                header('location:new-password.php');
             }else{
                $msg1 = "OTP is Not Matched.";
             }
         }
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/reset-responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css section end -->
    <script src="https://kit.fontawesome.com/9e126d7ac9.js" crossorigin="anonymous"></script>
    <style>
        .error{
            color: red;
            margin-top: 0px;
        }
    </style>
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="reset">
                    <div class="your">
                        <h1>Reset Your Password</h1>
                        <p>Enter your email and we '|| Send you instructions on how to reset your password</p>
                        <form action="" method="POST">
                        <input type="email" placeholder="Email address" name="email"> <br>
                        <div class="error"><h6><?php echo $msg; ?></h6></div>
                        <button id="send-btn" type="submit" name="submit" class="btn btn-primary w-100 mt-3 mb-2">Send OTP</button> 
                         </form>
                         <hr>
                         <form action="" method="POST" class="d-flex justify-content-between mb-2">
                         <input type="text" placeholder="Enter One Time Password" name="otp" style="width: 75%;"> <br>
                         <button type="submit" name="submit1" class="btn btn-primary" style="width: 18%;">Verify</button>
                         </form>
                         <div class="error"><h6><?php echo $msg1; ?></h6></div>
                        <p>Go back to <a href="login-from.php">Login page</a></p>
                    </div>

                </div>

            </div>
        </div>
    </section>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


</body>

</html>