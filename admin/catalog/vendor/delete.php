<?php



require_once '../config/connect.php';



$id = $_GET['id'];



mysqli_query($connect, "DELETE FROM `catalogs` WHERE `catalogs`.`id` = '$id'");



header('Location: /admin/catalog/');