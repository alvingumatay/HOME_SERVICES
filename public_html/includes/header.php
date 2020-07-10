<?php
session_start();


?>
<div class="brand clearfix">
 <div class = "navbar navbar-default navbar-fixed-top" style="background-color:#0082e6;">	
 
    <label class = "navbar-brand" style="font-size: 15px;">HMS <span><?php echo htmlentities($_SESSION['alogin']);?></span>
    </label>
    <center>
    <?php 
  $reciver = $_SESSION['login'];
$sql1 ="SELECT id from feedback where reciver = (:reciver)";
$query1 = $dbh -> prepare($sql1);;
$query1-> bindParam(':reciver', $reciver, PDO::PARAM_STR);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$regbd=$query1->rowCount();
?>
    <label class = "navbar-brand" style="font-size: 15px;">
    	<a href = "messages.php"><span class = "glyphicon glyphicon-envelope"></span><span class = "badge"><?php echo htmlentities($regbd);?></span></a>
    </label> 
<?php 
$sql6 ="SELECT id from services ";
$query6 = $dbh -> prepare($sql6);;
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$query=$query6->rowCount();
?>
    <label class = "navbar-brand" style="font-size: 15px;">
    <a href = "manage_house.php"><span class = "glyphicon glyphicon-th-list"></span> <span class = "badge"><?php echo htmlentities($query);?>
    </span></a>
    </label> 
    
</center>

		<span class="menu-btn"><i class="fa fa-bars"></i></span>
	
<ul class="ts-profile-nav">
		<li class="ts-account">
           <a href="#">
           	<center><span class = "glyphicon glyphicon-user"></span></center>
           	<i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href = "setting.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				</a>
			</li>
		</ul>

		
		
	</div>
	</div>
