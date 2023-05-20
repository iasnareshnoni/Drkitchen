<?php
session_start();
require "config.inc.php";
?>
<!DOCTYPE html>
<html style="  scroll-behavior: smooth;">

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

  <!-- css section end -->
  <script src="https://kit.fontawesome.com/9e126d7ac9.js" crossorigin="anonymous"></script>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="index.js">
  <link rel="stylesheet" href="css/responsive1.css">

  <script src="https://kit.fontawesome.com/9e126d7ac9.js" crossorigin="anonymous"></script>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- fonawsome -->

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
  <link href="css/check-out.css" rel="stylesheet" />


</head>

<body >
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">

        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img class="img-brand" src="images/logo.png" alt="">
          </a>
          <div class="" id="">
            <div class="User_option">
            <?php
                if(!isset($_SESSION['name'])){
               ?>
              <a href="login.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Login</span>
              </a>
              <?php
                }else{
                ?>
              <a onclick="openNav()" onclick="window.location.href='cart.html';" style="cursor: pointer;color: white;">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Profile</span>
              </a>
              <?php
                }
              ?>
              <!--  -->
              <div class="shopping">
                <a href="cart.php" id="cart" class="cart" data-totalitems="0">
                  <svg type="button" value="#" xmlns="#" width="50" height="20" fill="currentColor"
                    class="bi bi-bag-check-fill text-white" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                  </svg>
                </a>
                <!-- <span class="quantity">0</span> -->
              </div>
            </div>

            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="humburger-menu-logo">
                <img src="images/logo.png" alt="">
              </div>
              <div class="overlay-content">
                <div class="boxing">
                  <div class="great-profle">
                    <div class="row">
                      <div class="col-md-6 col-lg-5">
                        <div class="profile">
                          <img src="images/man.png" alt="">
                        </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                        <div class="detail">
                          <h2><?php echo $_SESSION['name'];?></h2>
                          <p><?php echo $_SESSION['mobile'];?></p>
                        </div>
                        <p class="email-tagj"><?php echo $_SESSION['email'];?></p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="main-side-bar mt-4">
                        <a  href="cart.php"><img src="images/Images4.png" alt="">Cart</a>
                        <a href="order_details.php" class="effect-underline"><img src="images/Image2.png" alt="">Order</a>
                        <a href="logout.php" class="text-underline effect-underline"><img src="images/images3.png" alt="">Customer Support</a>
                        <a href="logout.php" class="text-underline effect-underline"><img src="images/images1.png" alt="">Logout</a>
                    </div>
                    <div class="some-social">
                      <a href="#"><img src="#" alt=""></a>
                      <a href="#"><img src="#" alt=""></a>
                      <a href="#"><img src="#" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </nav>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse justify-content-center" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Vip Advantage Card</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Meal By doctor's Kitchen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <!-- Links -->
          </div>
          <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->
      </div>
    </header>
    <!-- end header section -->