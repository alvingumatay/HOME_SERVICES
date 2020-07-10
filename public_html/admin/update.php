<?php
include('./includes/db.php');
$id=$_GET['id'];
$id=$_POST['id'];
$activities = $_POST['activities'];
$post = $_POST['post'];
$mysqli->query("update services set id='$id', activities='$activities', post='$post' where id=$id");
header('location: manage_house.php');
?>