<?php

$mysqli = mysqli_connect("localhost","root","","home_activity");
if (!$mysqli){
	die("Connection error: " . mysqli_connect_error());
}

?>