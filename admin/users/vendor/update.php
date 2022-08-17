<?php



require_once '../config/connect.php';




$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$role = $_POST['role'];


mysqli_query($connect, "UPDATE `users` SET `username` = '$username', `email` = '$email', `phone` = '$phone', `role` = '$role' WHERE `users`.`id` = '$id'");


header('Location: /admin/users/');