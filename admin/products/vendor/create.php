<?php 
require_once 'config/connect.php';
$id = $_POST['id'];
$products_name = $_POST['products_name'];
$measurement_id = $_POST['measurement_id'];
$amount = $_POST['amount'];
$price = $_POST['price'];




ysqli_query($connect,"INSERT INTO `products` (`id`, `products_name`, `measurement_id`, `amount`, `price`) VALUES (NULL, '$products_name', '$measurement_id', '$amount', '$price')");
            
            header("Location: /admin/products/");



