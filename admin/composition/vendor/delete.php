<?php



require_once '../config/connect.php';



$id = $_GET['id'];



mysqli_query($connect, "DELETE FROM `composition` WHERE `composition`.`id` = '$id'");



header('Location: /admin/composition/');