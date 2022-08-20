<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

// $id = $_GET['id'];
// mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = '$id'");
// header('Location: /admin/products.php');

if(!empty($_GET)) {
    
    $sql = 'DELETE from products WHERE id = ' . $_GET['id'];
    
    if (mysqli_query($connect, $sql)) {
        echo "Інгредієнт видалено";
        header("Location: /admin/products.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
}
    
?>

