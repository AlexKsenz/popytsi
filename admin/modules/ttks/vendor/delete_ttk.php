<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `ttk` WHERE `ttk`.`id` = '$id'");
header('Location: /admin/compositions.php');
?>