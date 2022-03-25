<?php  	
    if(ISSET($_POST['submit'])){
    	
	    $activity = $_POST['activity'];
		$tdate = $_POST['tdate'];
		$dtime = $_POST['dtime'];
		$status = $_POST['status'];
        $conn = new mysqli("localhost","root","","home_activity");
         $q1 = $conn->query("SELECT * FROM `home_tasks` WHERE `activity` = '$activity'") or die(mysqli_error());
		$f1 = $q1->fetch_array();
		$c1 = $q1->num_rows;
			if($c1 > 0){
				echo "<script>alert('home tasks already taken')</script>";
			}else{
				$conn->query("INSERT INTO `home_tasks` VALUES(NULL, '$activity', '$tdate', '$dtime',  '$status')") or die(mysqli_error());
				echo "<script>alert('sucessfully inserted')</script>";
				echo "<script>window.location='manage_house.php';</script>";
			}				
		}
?>