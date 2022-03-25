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
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'user.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOME CLEAN | SERVICES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
  <link rel = "shortcut icon" href = "./images/cicon.png" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link href="css/customize.css" rel="stylesheet" type="text/css" media="all" />
<link href="src/style.css" rel="stylesheet" type="text/css" media="all" />
<!--modal script-->
 <script src="./js/bootstrap.min.js"></script>
 <style type="text/css">
   *{
    scroll-behavior: smooth;
   }
 </style>
 <!-- //  -->


</head>
<body>
    <header>
    	<div class="container">
        <nav>
          <ul>
            <li class="current"><a href="#1"><span> <span> ABOUT </span> </span></a></li>
            <!--<li><a href="about.php">ABOUT</a></li>-->
            <!--<li><a href="services.php">SERVICES</a></li>-->
            <li><a href="#" name="login" id="login"  data-toggle="modal" data-target="#loginModal"> <span> <span> SIGNUP </span> </span> </a>
            <br/><br/>
            </li>
          </ul>

        </nav>
    		<div id="branding">
    			<h1> 
                <span class="highlight">HOME</span> |
                 CLEAN SERVICES
    			</h1>
    		</div>
    		

        <!-- MODAL ---->
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
                     <center> <input type="text" name="username" style = "width:300px;" class="form-control" placeholder="input your email" />  </center>
                     <br />  
                   
                     <center> <input type="password" name="password"  style = "width:300px;" class="form-control" placeholder="please input your password" />  </center>
                     <br />  
                    <center><button type="submit" name="login"  style="width: 300px; height: 40px; background-color: #156699; font-size: 18px;"  "class="btn btn-warning btn-primary">Login</button></center>

                      <hr/>
                     <center>  <button type="button" style="width: 300px; height: 40px; background-color: #156699; font-size: 18px;"  class="btn btn-warning btn-primary" target="_blank" onclick="window.location.href='http://localhost/HOME_SERVICES/public_html/register.php?link=register'">Register</button>
                     </center>
                   
                   </div>  
           </div>  
      </div>  
 </div>  

                    <!-- MODAL ----> 
    	</div>

    </header>
   <!---- ESSET ----->
   <div id="home" class="w3ls-banner">
    <!-- banner-text -->
    <div class="slider">
      <div class="callbacks_container">
        <ul class="rslides callbacks callbacks1" id="slider4">
          <li>
            <div class="w3layouts-banner-top">

              <div class="container">

              </div>
            </div>
          </li>
          <li>
            <div class="w3layouts-banner-top w3layouts-banner-top1">
              <div class="container">
                
              </div>
            </div>
          </li>
          <li>
            <div class="w3layouts-banner-top w3layouts-banner-top2">
              <div class="container">
                
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      <!--banner Slider starts Here-->
    </div>
        
  </div>   
   <!---- ----->
     <section id="newsletter">
    	<div class="container">
    	 <center>	<h3>ABOUT HOME ACTIVITY TASKING SERVICES</h3></center>
    		<!--<form>
    			<input type="email" placeholder="Enter Email...">
    			<button type="submit" class="button_1">Subscribe</button>
    		</form>-->
    	</div>
    </section>
     <div id="1">
     <section id="boxes">
    	<div class="container" >
    		<div class="box">
    			<img src="./images/cicon.png">
          <br/>
    			<h3>TIME MANAGEMENT TASKING</h3>
          <br/>
    			<p>You make a marking tool for a list plan for home cleaning every single time.</p>
    		</div>
    		<div class="box">
    			<img src="./images/504652.png">
          <br/>
    			<h3>HOME ASSIGMENT PLAN </h3>
          <br/>
    			<p>Make an listing  of home activity task  and review of assign task that every single time</p>
    		</div>
    		<div class="box">
    			<img src="./images/images.png">
          <br/>
    			<h3>HOME MANAGING</h3>
          <br/>
    			<p>You make managing of cleaning a house based on your task</p>
    		</div>
    	</div>
    </section>
  </div>
   
    <footer>
    	<p>HOME CLEAN | SERVICES  &copy; 2022</p>
    </footer>
</body>
<!-- js -->

<script type="text/javascript" src="./js1/jquery-2.1.4.min.js"></script>
<!-- contact form -->


<!-- /contact form -->  
<!-- Calendar -->
    <script src="./js1/jquery-ui.js"></script>
    <script>
        $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>
<!-- //Calendar -->
<!-- gallery popup -->

<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<!--<script type="text/javascript" src="./js1/move-top.js"></script>-->
<!--<script type="text/javascript" src="./js1/easing.js"></script>-->
<!---<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>-->
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
       <!-- <script defer src="./js1/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        });
        </script>-->
      <!-- //flexSlider -->
<script src="./js1/responsiveslides.min.js"></script>
      <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
              auto: true,
              pager:true,
              nav:false,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });
          
            });
      </script>
    <!--search-bar-->
    <script src="./js1/main.js"></script>  
<!--//search-bar-->
<!--tabs-->
<script src="./js1/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  
  <!--<div class="arr-w3ls">
  <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>-->
<!-- //smooth scrolling -->

<script type="text/javascript" src="./js1/bootstrap-3.1.1.min.js"></script>
<script type="text/javascript" src="./js1/jquery-3.5.1.min.js"></script>


<script src='./js1/bootstrapvalidator.min.js'></script>
</html>