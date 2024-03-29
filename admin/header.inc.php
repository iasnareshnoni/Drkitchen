<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content="Sikaria Tech Pvt. Ltd"/>
  <title>The Doctor Kitechen</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <style>
     .link{
      text-decoration: underline;
      color: blue;
     }
     #error-message{
    color: red;
    background-color: antiquewhite;
    padding: 10px;
    border-radius: 5px;
    position: absolute;
    top: 22px;
    right: 30px;
    font-weight: 700;
    display: none;
}
    #success-message{
        color: green;
        background-color: rgb(178, 253, 171);
        padding: 10px;
        border-radius: 5px;
        position: absolute;
        top: 22px;
        right: 30px;
        font-weight: 700;
        display: none;
    }
  </style>
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">

 <?php include "sidebar.php"; ?>
 