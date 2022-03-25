<?php
session_start();
?>
<div class="brand clearfix">
 <div class = "navbar navbar-default navbar-fixed-top" style="background-color:#0082e6;">	
<label class = "navbar-brand"  style="font-size: 26px;">  <font color="#ffce14">Home Clean | Services</font>
    </label> 
    </label>
    <center>
<?php 
$sql ="SELECT activity from home_tasks";
$query = $dbh -> prepare($sql);;
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$query=$query->rowCount();
?>
    <label class = "navbar-brand" style="font-size: 15px;">
    <a href = "manage_house.php"><font color="white">Total: Home Work load</font> &nbsp; <span class = "badge"><?php echo htmlentities($query);?>
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
					<li><a href="#"><span><?php echo htmlentities($_SESSION['alogin']);?></span></a></li>
				</ul>
				</a>
			</li>
		</ul>

		
		
	</div>
	</div>
