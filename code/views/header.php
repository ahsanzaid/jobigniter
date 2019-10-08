<?php 
if(!isset($_SESSION)){
  session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">

    <title>Job Igniter</title>
    <!--Jquery-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    <!-- Favicon -->
    <link rel="shortcut icon" href="public/assets/img/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/assets/css/custom.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/css/bootstrap-select.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="public/assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="public/assets/fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/fonts/themify-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="public/assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="public/assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="public/assets/extras/owl.theme.css" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="public/assets/extras/settings.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="public/assets/css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="public/assets/css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="public/assets/css/responsive.css" type="text/css">
    <!-- Responsive JOb Deytains CSS Styles -->
    <link rel="stylesheet" href="public/assets/css/jobdetails.css" type="text/css">
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script> -->
    

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="public/assets/css/colors/red.css" media="screen" />

    <!--CV CSS-->
    <link type="text/css" rel="stylesheet" href="public/assets/cvcss/style.css">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
    <!-- Live Cv Java Script-->
    <script type="text/javascript" src="public/assets/js/livecv.js"></script>
  </head>
  <!-- Header Section Start -->
  <body>

  <?php
  $uri = trim($_SERVER['REQUEST_URI'],'/');
  $uri = trim($uri,'job/');
  ?>
  <?php if ($uri == ''): ?> 
    <div class="header">
      <!-- Start intro section -->
      <section id="intro" class="section-intro">
        <div class="logo-menu">
          <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="/job"><img src="public/assets/img/logo.png" alt=""></a>
              </div>

              <div class="collapse navbar-collapse" id="navbar">
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav">
                <li><a class="active" href="/job">Home</a></li>
                <li><a  href="/job/browsejob">Browse Jobs</a></li>
                <?php if(isset($_SESSION['user'])): ?>
                <li><a href="/job/cvbuilder">CV Builder</a></li>
                <?php    endif ?>
                <li><a href="/job/aboutus">About Us</a></li>
                <li><a href="/job/contact">Contact Us</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right float-right">
              <?php if(isset($_SESSION['cuser'])): ?>
                <li class="left"><a href="/job/postjob"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                <?php endif ?>
                <?php if(!isset($_SESSION['user']) && !isset($_SESSION['cuser'])): ?>
                <li class="left"><a href="/job/csignup"><i class="ti-lock"></i>Company Sign Up</a></li>
                <li class="left"><a href="/job/usignup"><i class="ti-lock"></i>User Sign Up</a></li>
                <li class="right"><a href="/job/login"><i class="ti-lock"></i>  Log In</a></li>
                <?php else: ?>
                <?php if(isset($_SESSION['user']) && !isset($_SESSION['cuser'])): ?>
                <?php if($_SESSION['user']['cv'] != ''): ?>
                <li class="left"><a href="<?php echo $_SESSION['user']['cv'] ?>" download><i class="ti-download"></i>Download CV</a></li>
                <?php endif ?>
                <?php endif ?>
                <li class="right"><a href="/job/logout"><i class="ti-lock"></i>  Log out</a></li>
                <?php endif ?>
              </ul>
            </div>
          </div>
          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
            <li><a class="active" href="/job">Home</a></li>
                <li><a  href="/job/browsejob">Browse Jobs</a></li>
                <?php if(isset($_SESSION['user'])): ?>
                <li><a href="/job/cvbuilder">CV Builder</a></li>
                <?php endif ?>
                <li><a href="/job/aboutus">About Us</a></li>
                <li><a href="/job/contact">Contact Us</a></li>
              </li>
            <li class="btn-m"><a href="/job/postjob"><i class="ti-pencil-alt"></i> Post A Job</a></li>
            <li class="btn-m"><a href="/job/login"><i class="ti-lock"></i>  Log In</a></li>
          </ul>
          <!-- Mobile Menu End -->
        </nav>
    </div>
    
<?php else: ?>
    <div class="header">
      <div class="logo-menu">
        <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="/job"><img src="public/assets/img/logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
               <!-- Start Navigation List -->
               <ul class="nav navbar-nav">
                <li><a class="active" href="/job">Home</a></li>
                <li><a  href="/job/browsejob">Browse Jobs</a></li>
                <?php if(isset($_SESSION['user'])): ?>
                <li><a href="/job/cvbuilder">CV Builder</a></li>
                <?php endif ?>
                <li><a href="/job/aboutus">About Us</a></li>
                <li><a href="/job/contact">Contact Us</a></li>
              </ul>
               <ul class="nav navbar-nav navbar-right float-right">
               <?php if(isset($_SESSION['cuser'])): ?>
                <li class="left"><a href="/job/postjob"><i class="ti-pencil-alt"></i> Post A Job</a></li>
                <?php endif ?>
                <?php if(!isset($_SESSION['user']) && !isset($_SESSION['cuser'])): ?>
                <li class="left"><a href="/job/csignup"><i class="ti-lock"></i>Company Sign Up</a></li>
                <li class="left"><a href="/job/usignup"><i class="ti-lock"></i>User Sign Up</a></li>
                <li class="right"><a href="/job/login"><i class="ti-lock"></i>  Log In</a></li>
                <?php else: ?>
                <li class="right"><a href="/job/logout"><i class="ti-lock"></i>  Log out</a></li>
                <?php endif ?>
              </ul>
            </div>
          </div>
          <!-- Mobile Menu Start -->
          <ul class="wpb-mobile-menu">
            <li>
              <a href="/job">Home</a>
              
            </li>
            <li class="btn-m"><a href="/job/postjob"><i class="ti-pencil-alt"></i> Post A Job</a></li>
            <li class="btn-m"><a href="/job/login"><i class="ti-lock"></i>  Log In</a></li>
          </ul>
          <!-- Mobile Menu End -->
        </nav>

        <!-- Off Canvas Navigation -->
        
      </div>
    </div>

    <div class="page-header" style="background: url(public/assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title"><?php echo $name; ?></h2>
              <ol class="breadcrumb">
                <li><a href="/job"><i class="ti-home"></i> Home</a></li>
                <li class="current"><?php echo $name; ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endif ?>

