<?php



require_once '../config/connect.php';


$id = $_POST['id'];
$products_name = $_POST['products_name'];
$measurement_id = $_POST['measurement_id'];
$amount = $_POST['amount'];
$price = $_POST['price'];


mysqli_query($connect, "UPDATE `products` SET `products_name` = '$products_name', `measurement_id` = '$measurement_id', `amount` = '$amount', `price` = '$price' WHERE `products`.`id` = '$id'");



header('Location: /admin/products/');