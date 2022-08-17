<?php



require_once '../config/connect.php';



$id = $_GET['id'];



mysqli_query($connect, "DELETE FROM `ttk` WHERE `ttk`.`id` = '$id'");



header('Location: /admin/composition/');