<?php
include('./admin/includes/db.php');

$id = $_POST['id'];
$activities = $_POST['activities'];
$post = $_POST['post'];
$mysqli->query("insert into services (id, activities, post) values ('$id','$activities', '$post')");
$res = $mysqli->query("select id from services order by id desc");
$row = $res->fetch_row();
$id = $row[0];
header('location: manage_house.php');
?>