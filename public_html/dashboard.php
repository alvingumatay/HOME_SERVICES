<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>HOME CLEAN | SERVICES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
    <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
    <meta name="author" content="Pedro Botelho for Codrops" />
    <link rel = "shortcut icon" href = "./images/ico.png" />
    <link rel="stylesheet" type="text/css" href="./css3/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
    <link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css3/style3.css">
     <link rel="stylesheet" type="text/css" href="./css3/style4.css">
     <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
     <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap Datatables -->
  
    <!-- Bootstrap social button library -->
    
    <!-- Admin Stye -->
    <link rel="stylesheet" href="./css6/style.css">
</head>
<body>
 
  <?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>

 <div class="content-wrapper">
  <div class="container-fluid">
  <div class="row"> 
  <div class="row header col-sm-12" style="text-align:center;color:green;">
    <div style="height: 50px;"></div>

   <!-- BUILD CODE ASSIGNMENT -->
<!-- BUILD CODE HERE! -->
   <!-- BUILD CODE ASSIGNMENT -->

  </div>
</div>
</div>
</div>
</div>
  
</body>

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
 <script src="./js2/jquery.min.js"></script>
  <script src="./js2/bootstrap-select.min.js"></script>
  <script src="./js2/bootstrap.min.js"></script>
  <script src="./js2/jquery.dataTables.min.js"></script>
  <script src="./js2/dataTables.bootstrap.min.js"></script>
  <script src="./js2/Chart.min.js"></script>
  <script src="./js2/fileinput.js"></script>
  <script src="./js2/chartData.js"></script>
  <script src="./js2/main.js"></script>
  <script src="./js/script.js"></script> 
 </html>
 