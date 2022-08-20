<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `composition` WHERE `composition`.`id` = '$id'");
header('Location: /admin/compositions.php');

?>