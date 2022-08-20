<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

$id = $_POST['id'];
$products_name = $_POST['products_name'];
$measurement_id = $_POST['measurement_id'];
$amount = $_POST['amount'];
$price = $_POST['price'];


$sql = "UPDATE `products` SET `products_name` = '$products_name', `measurement_id` = '$measurement_id', `amount` = '$amount', `price` = '$price' WHERE `products`.`id` = '$id'";
if (mysqli_query($connect, $sql)) {
    header("Location: /admin/products.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

?>



