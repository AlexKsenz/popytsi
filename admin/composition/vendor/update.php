<?php



require_once '../config/connect.php';


$id = $_POST['id'];
$composition = $_POST['composition'];



mysqli_query($connect, "UPDATE `composition` SET `composition` = '$composition'  WHERE `composition`.`id` = '$id'");



header('Location: /admin/composition/');