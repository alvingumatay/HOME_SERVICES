<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../css/style4.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel = "shortcut icon" href = "../images/ico.png" />	
</head>
<body>
	<nav>
		<label class="logo">HS Admin</label>
	</nav>

<br><br><br>
<div class="clsDiv">
	<h4>Admin</h4>
	<hr/>
	<form id="frmLogin" method="post">
		<label for="email">Email</label>
		<input class="clsTxt" type="text" name="username" placeholder="Enter email">
		<label for="password">Password</label>
		<input class="clsTxt" type="text" name="password" placeholder="Enter password">
		<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
	</form>
</div>
</body>
</html>
