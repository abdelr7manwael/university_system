<?php
ob_start();
  
  
  session_start();
  if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("locatio:/project/index.php");
  }
  
  ob_end_flush();
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
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/project/admin">Uni-Sys</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


      <?php if(isset($_SESSION['admin'])):?>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="/project/admin">Home</a></li>
          <!-- <li><a href="/project/admin/levels/list.php">levels</a></li> -->
        

          <li class="dropdown"><a href="#"><span>Doctors</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/doctors/add.php">Add</a></li>
              <li><a href="/project/admin/doctors/list.php">list</a></li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>students</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/students/add.php">Add</a></li>
              <li><a href="/project/admin/students/list.php">list</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/courses/add.php">Add</a></li>
              <li><a href="/project/admin/courses/list.php">list</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>registcourse</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/registcourse/add.php">Add</a></li>
              <li><a href="/project/admin/registcourse/list.php">list</a></li>
              
            </ul>
          </li>
          
          <li class="dropdown"><a href="#"><span>coursedr</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/coursedr/add.php">Add</a></li>
              <li><a href="/project/admin/coursedr/list.php">list</a></li>
              
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>messages</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/stu_msg/list.php">students</a></li>
              <li><a href="/project/admin/doc_msg/list.php">doctors</a></li>
              
            </ul>
          </li>
<?php endif;
if($_SESSION['role'] == 0):?>
          <li class="dropdown"><a href="#"><span>admins</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/project/admin/admins/add.php">Add</a></li>
              <li><a href="/project/admin/admins/list.php">list</a></li>
              
            </ul>
          </li>
          <?php endif;?>
          
          <li>
          <form action="/project" class=" my-0 mx-3">
       <?php if(isset($_SESSION['admin'])): ?>
     <button style="text-transform:capitalize;" type="submit" name="logout" class="btn btn-outline-danger mb-0 ">Logout   <i  class="fas fa-sign-out-alt"> </i></button>
   
 

 <?php endif; ?>
     </form>
          </li>
          
        </ul>
        
        

     <i class="bi bi-list fas fa-align-left mobile-nav-toggle" style="color: black;"></i>
      </nav><!-- .navbar -->



     
     
       
      
    </div>
  </header><!-- End Header -->
