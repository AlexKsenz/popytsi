<?php 
require_once '../config/connect.php';




$composition = $_POST['composition'];




mysqli_query($connect,"INSERT INTO `composition` (`id`, `composition`) VALUES (NULL, '$composition')");



header("Location: /admin/composition/");

