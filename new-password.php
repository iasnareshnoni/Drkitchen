<?php 
if(isset($_COOKIE['OTP'])){
   include "config.inc.php";
   $c_user = $_COOKIE['user'];
   $msg = '';
if(isset($_POST['submit'])){
    $password = $_POST['pass'];  
    $c_pass = $_POST['c_pass'];

    if($password == '' || $c_pass == ''){
        $msg = "All Fields Required.";
    }else{
        if($password == $c_pass){
            $pass = password_hash($password, PASSWORD_DEFAULT);    
             $update = mysqli_query($con,"UPDATE user SET user_pass = '$pass' WHERE user_email = '$c_user'");
             if($update){
               setcookie('OTP', $otp, time() - 300);
               setcookie('user', $email, time() - 300);
              header('location:login.php');
             }
           }else{
               $msg = "Password & Confirm Password Should Be match.";
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
    <link rel="stylesheet" href="css/new-password-responsive.css">
    <link rel="stylesheet" href="css/new-password.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css section end -->
    <script src="https://kit.fontawesome.com/9e126d7ac9.js" crossorigin="anonymous"></script>
</head>

<body>
<style>
    .container{
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
    }

    #passwordd{
        display: flex;
    justify-content: center;
    }

    .error{
            color: red;
            margin-top: 20px;
        }
</style>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="passwordd">
                    <div class="cartt">
                        <div class="maill ">
                           
                            <p>  <i class="fa-solid fa-user"></i> &nbsp;  <?php echo $c_user; ?></p>
                        </div>
                        <form action="" method="POST">
                        <div class="input__box">
                            <span class="details">New password</span>
                            <input type="text" name="pass" placeholder="New Password" >

                        </div>
                        <div class="input__box">
                            <span class="details">Comfirm New Password</span>
                            <input type="text" name="c_pass" placeholder="Comfirm New Password" >
                        </div>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary w-100">
                        </form>
                        <div class="error"><h6><?php echo $msg; ?></h6></div>
                    </div>
                    <div>                     
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
<?php
}else{
    header('location:reset.php');
}

?>