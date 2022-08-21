<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

$id_composition = $_POST['id_composition'];
$id_category = $_POST['id_category'];
$price = $_POST['price'];
$amount_catalog = $_POST['amount_catalog'];
$imageName = '';
$comments = $_POST['comments'];

if($_FILES && $_FILES['filename']['error'] == UPLOAD_ERR_OK) {
    $imagename = "upload/" . $_FILES['filename']['name'];
    $ext = pathinfo($_FILES['filename']['name']);
    $imageName = $ext['filename'] . "." . $ext['extension'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $imagename);
}

mysqli_query($connect,"INSERT INTO `catalogs` (`id`, `id_composition`, `id_category`, `price`, `amount_catalog`, `imagename`, `comments`) VALUES (NULL, '$id_composition', '$id_category', '$price', '$amount_catalog', '$imageName', '$comments')");

header('Location: /admin/catalogs.php');
?>