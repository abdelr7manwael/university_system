<?php
  
  
  session_start();
  if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("locatio:/project");
  }
  
  
  ?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UNI-SYS 😃</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/project/assets/img/favicon.png" rel="icon">
  <link href="/project/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/project/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/project/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/project/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/project/assets/vendor/font-awesome/all.min.css" rel="stylesheet">
  <link href="/project/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
  

  <!-- Template Main CSS File -->
  <link href="/project/assets/css/style.css" rel="stylesheet">

</head>

<body>



  
<header id="header" class="fixed-top">
    <div class="container d-flex py-2 align-items-center">

      <h1 class="logo me-auto"><a href="/project">Uni-Sys</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



    
       
      
    </div>
  </header><!-- End Header -->
