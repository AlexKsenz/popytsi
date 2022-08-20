<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

$id = $_POST['id'];
$composition = $_POST['composition'];

mysqli_query($connect, "UPDATE `composition` SET `composition` = '$composition'  WHERE `composition`.`id` = '$id'");

header("Location: /admin/compositions.php");

?>
