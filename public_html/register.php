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
<html lang="en">
<head>
<title>HOME CLEAN | SERVICES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel = "shortcut icon" href = "./images/cicon.png" />
<!-- //for-mobile-apps -->
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link href="src/style.css" rel="stylesheet" type="text/css" media="all" />
<!--modal script-->
 <script src="./js/bootstrap.min.js"></script>
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
 <!-- //  -->
</head>
<body>
 <header>
      <div class="container">
        <nav>
          <ul>
            <li class="current"><a href="index.php"><span> <span> HOME </span> </span></a></li>
            <!--<li><a href="about.php">ABOUT</a></li>-->
            <!--<li><a href="services.php">SERVICES</a></li>-->

          </ul>
         
        </nav>
        <div id="branding">
          <h1> 
                <span class="highlight">HOME</span> |
                 CLEAN SERVICES
          </h1>
        </div>
      </div>
      <br/> 
       </header>
       &nbsp;&nbsp;&nbsp;&nbsp;
             <!-- contents ---->
<div class="container">
       <center> <div class="card mx-auto" style="width: 30rem; align-items: center;">
          <div class="card-header" style="background-color:#156699; color:#ffffff;font-weight: bold;font-size: 30px;text-align: center;">Register</div>
          &nbsp;&nbsp;
          <div class="card-body">
              <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
           
              <div class="form-group" style="text-align: left;">
                <label for="username">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Fullname">
              </div>
              <div class="form-group" style="text-align: left;">
                <label for="email">Email </label>
                <input type="email" name="email" class="form-control"  placeholder="Enter email">
              </div>
              <div class="form-group" style="text-align: left;">
                <label for="password1">Password</label>
                <input type="password" name="password"  class="form-control"  placeholder="Password">
              </div>
              <div class="form-group" style="text-align: left;">
                <label for="Address">Address</label>
                <input type="text" name="address" class="form-control"   placeholder="Your Address">
              </div>
              <div class="form-group" style="text-align: left;">
                <label for="Mobile" style="text-align: left;">Mobile No.</label>
                <input type="text" name="mobile" class="form-control"  placeholder="Your Cell Phone No.">
              </div>

              <div class="form-group" style="text-align: left;">
                <label for="Profile">Profile</label>
                <input type="file" name="image" class="form-control" placeholder="Upload your Picture Profile">
              </div>
              <div class="form-group" style="text-align: left;">
              <button type="submit" name="submit" class="btn btn-primary pull-right"><span class="fa fa-user"></span>&nbsp;Register</button>
            </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </form>
          </div>
        <div class="card-footer text-muted">
          
        </div>
      </div></center>
  </div>
            <!-- contents ---->
    <footer>
      <p>HOME CLEAN | SERVICES  &copy; 2022</p>
    </footer>
</body>
 
</html>

 