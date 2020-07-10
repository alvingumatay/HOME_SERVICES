<?php
 include('./includes/db.php');
 $id=$_GET['id'];
 $mysqli->query("delete from services where id=$id");
 header('location:manage_house.php');
?>