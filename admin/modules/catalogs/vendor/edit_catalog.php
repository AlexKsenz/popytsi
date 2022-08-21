<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

$id = $_POST['id'];
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

mysqli_query($connect, "UPDATE `catalogs` SET `id_composition` = '$id_composition', `id_category` = '$id_category', `price` = '$price', `amount_catalog` = '$amount_catalog', `imagename` = '$imageName', `comments` = '$comments' WHERE `id` = '$id'");


header('Location: /admin/catalogs.php');
?>