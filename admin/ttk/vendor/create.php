<?php 
require_once '../config/connect.php';





$products_id = $_POST['products_id'];
$ttk_id = (int)substr($_SERVER['HTTP_REFERER'], -1);


mysqli_query($connect,"INSERT INTO `ttk` (`id`, `id_composition`, `products_id`) VALUES (NULL, $ttk_id, $products_id)");


header("Location: /admin/composition/");

