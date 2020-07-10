<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$status='1';
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<meta charset="utf-8">
<head>
	<title>HOME BASED SERVICES</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
 <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
<meta name="author" content="Pedro Botelho for Codrops" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
<link rel="stylesheet"  type="text/css" href="./css/footer.css">
<link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="./css/bootstrap.min.css">
 <script src="./js/jquery.min.js"></script>
 <script src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="stylesheet" type="text/css" href="./includes/style.css">
<link rel = "shortcut icon" href = "./images/ico.png" />
</head>
<body>
	<div class="overlay"><div class="loader"></div></div>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa fa-bars"></i>
	   </label>
		<label class="logo">HS</label>
		<ul>
			<li><a  class="active" href="#">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">GALLERIES</a></li>
            <li><a href="#" name="login" id="login" class="btn btn-success" data-toggle="modal" data-target="#loginModal">SIGNUP</a></li>
		</ul>
	</nav>
	<div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Login</h4>  
                </div>
                
                <div class="modal-body"> 
                <form method="post">   
                     <label>Username</label>  
                     <input type="text" name="username"  class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password"  class="form-control" />  
                     <br />  
                     <button type="submit" name="login"  class="btn btn-info btn-block">Login</button>

                      <hr/>
                      <button type="button" class="btn btn-info btn-block" target="_blank" onclick="window.location.href='http://localhost/HOME_SERVICES/public_html/register.php?link=register'">Register</button>
                   
                   </div>  
           </div>  
      </div>  
 </div>  
	
     <section>
     <br/><br/><br/><br/><br/><br/><br/>
     <br/><br/><br/><br/><br/><br/><br/>
     <br/><br/>
     

     <div class="container">
      	
      <div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<img src="images/huc.png" alt="huc.png"/></a>
						<div class="sb-description">
							<h3>Cleaning Manage</h3>
						</div>
					</li>
					<li>
						<img src="images/bc.png" alt="bc.png"/></a>
						<div class="sb-description">
							<h3>Bleaching Clothes</h3>
						</div>
					</li>
					<li>
						<img src="images/hcc.png" alt="hcc.png"/></a>
						<div class="sb-description">
							<h3>House Cleaning</h3>
						</div>
					</li>

				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

				<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					
				</div>

			</div><!-- /wrapper -->

			
      </div>
    </section>
    <br><br><br><br><br><br>
    <div class="footer-main-div">
	<div class="footer-social-icons">
		<ul>
			<li><a href="#" target="blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="blank"><i class="fa fa-instagram"></i></a></li>
             <li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
	<div class="footer-menu-one">
	<ul>
		<li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact Us</a></li>  
	</ul>
</div>

<div class="footer-menu-two">
	<ul>
		<li><a href="#">Blog</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Media</a></li>
       
	</ul>
</div>
</div>
<div class="footer-bottom">
	<p>Design by:<a href="#">Learning Tutorial Points</a></p>
</div>
    <script type="text/javascript" src="./js/jquery.min.js"></script>
     <script type="text/javascript" src="./js/jquery.slicebox.js"></script>
     <script type="text/javascript" src="./js/nav-arrow.js"></script>
	<script src="./js2/bootstrap-select.min.js"></script>
	<script src="./js2/bootstrap.min.js"></script>
	<script src="./js2/jquery.dataTables.min.js"></script>
	<script src="./js2/dataTables.bootstrap.min.js"></script>
	<script src="./js2/Chart.min.js"></script>
	<script src="./js2/fileinput.js"></script>
	<script src="./js2/chartData.js"></script>
	<script src="./js2/main.js"></script> 
   </body>
</html>