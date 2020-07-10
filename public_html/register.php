<?php
include('./includes/config.php');
if(isset($_POST['submit']))
{

$file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="images/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);

$mobile=$_POST['mobile'];
$address=$_POST['address'];

if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$image=$final_file;
    }
$notitype='Create Account';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
    
$sql ="INSERT INTO users(name,email, password,  mobile, address, image) VALUES(:name, :email, :password,  :mobile, :address, :image)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> bindParam(':address', $address, PDO::PARAM_STR);
$query-> bindParam(':image', $image, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html>
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
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet"  type="text/css" href="./css/footer.css">
<link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="./css/bootstrap.min.css">
 <script src="./js/jquery.min.js"></script>
 <script src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel = "shortcut icon" href = "./images/ico.png" />
<script type="text/javascript">

	function validate()
        {
            var extensions = new Array("jpg","jpeg");
            var image_file = document.regform.image.value;
            var image_length = document.regform.image.value.length;
            var pos = image_file.lastIndexOf('.') + 1;
            var ext = image_file.substring(pos, image_length);
            var final_ext = ext.toLowerCase();
            for (i = 0; i < extensions.length; i++)
            {
                if(extensions[i] == final_ext)
                {
                return true;
                
                }
            }
            alert("Image Extension Not Valid (Use Jpg,jpeg)");
            return false;
        }
        
</script>
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fa fa-bars"></i>
	   </label>
		<label class="logo">HS</label>
		<ul>
		  <li><a href="index.php"  class="btn btn-info" >BACK</a></li>
		</ul>
	</nav>
	<!-- Register -->

    
     <div class="mydiv">
     <div class="row">
     	 <div  class="col-md-10">
     	 	<form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
     	 	   <h3 class="text-center">Register</h3>
    	      <div class="form-group">
              <label for="username">Full Name</label>
              <input type="text" name="name" class="form-control form-control-lg">
              </div>
              <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control form-control-lg">
              </div>
              <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control form-control-lg">
              </div>
              <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" class="form-control form-control-lg">
              </div>
              <div class="form-group">
              <label for="mobile">Mobile No.</label>
              <input type="number" name="mobile" class="form-control form-control-lg">
              </div>
              <div class="form-group">
              <label for="address">Profile</label>
              <input type="file" name="image" class="form-control form-control-lg">
              </div>
              <div class="form-group">
               <button type="submit" name="submit" class="btn btn-info btn-block btn-lg">Sign Up</button>
              </div>
     	 	</form>
          </div>
        </div>	
    </div>
  


   <!-- Register -->
    <br><br><br><br><br><br>
    <br><br><br>
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
     <script type="text/javascript" src="./js/login-button.js"></script>  
     <script src="./js2/jquery.min.js"></script>
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