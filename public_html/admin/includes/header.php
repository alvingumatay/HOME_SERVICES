<div class="brand clearfix">
 <div class = "navbar navbar-default navbar-fixed-top" style="background-color:#0082e6;">	
 <!--	
 <img src = "../images/ico1.png" style = "float:left;margin-top: 5px; margin-left:5px;" height = "45px" />
-->
    <label class = "navbar-brand" style="font-size: 26px;">HMS admin
    </label>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<!--
		<?php
        $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
        $q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
        $f = $q->fetch_array();
      ?>
      <?php
            $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
            $query = $conn->query("SELECT * FROM `admin` ORDER BY `admin_id` ") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
          ?>
      -->
		<ul class="ts-profile-nav">
		<li class="ts-account">
           <a href="#"><span class = "glyphicon glyphicon-user"></span>
           <!-- <?php 
              echo $f['firstname']." ".$f['lastname'];
            ?>
               -->
            <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href = "changepass.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="#"><div class="switch">
                        <input class="switch__input" type="checkbox" id="themeSwitch">
                        <label aria-hidden="true" class="switch__label" for="themeSwitch">On</label>
                        <div aria-hidden="true" class="switch__marker"></div>
                        </div></a></li>
				</ul>
			</li>
				</a>
		</ul>

		<!--
		<?php
						}
			$conn->close();
		?>-->
	</div>
	</div>
	
