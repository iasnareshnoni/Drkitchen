
<?php
 session_start();
 $msg = '';
 require_once "config.inc.php";
 if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == '' || $password == ''){
    $msg = "Username and Password Should be filled";
  }else{  
  
  $check = mysqli_query($con,"SELECT * FROM user WHERE user_email = '$username'");
  if(mysqli_num_rows($check) > 0){
     $result = mysqli_fetch_assoc($check);
     $_SESSION['name'] = $result['user_name'];
     $_SESSION['mobile'] = $result['mobile'];
     $_SESSION['email'] = $result['user_email'];
     $verify_pass = password_verify($password,$result['user_pass']);

     if($verify_pass){
       header('location:index.php');
     }else{
      $msg = "Password is Wrong.";
      }
    }else{
      $msg = "Username Not Found! Please Registered.";
    }
  }
 }
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>THE DOCTOR KITCHEN</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- slidck slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map"
    integrity="undefined" crossorigin="anonymous" />


  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/more.css" rel="stylesheet" />

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/form.css">

</head>
<body>

<div class="containersdf">
<div class="panel">
      <!-- <a href="index.php"><img class="home-button-login" src="images/home.png" alt=""></a> -->
		<div class="state"><br><i class="fa fa-unlock-alt"></i><br><img class="login-logo" src="images/logo.png" alt=""></div>
		<div class="form">
      <form action="" method="POST">
			<input placeholder='Email*' type="text" name="username" >
			<input placeholder='Password*' type="text" name="password" >
			<div class="login"><input type="submit" value="Login" name="submit" style="background:transparent; color:white; border:none"></div>
      </form>
      <div class="error"><?php echo $msg; ?></div>
		</div>
		<div class="fack"><a href="reset.php"><i class="fa fa-question-circle"></i>Forgot password?</a></div>
    <div class="fack"><a href="register.php"><i class="fa fa-question-circle"></i>Register Now</a></div>
	</div>
</div>




<script>
    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- slick  slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>



</body>

</html>