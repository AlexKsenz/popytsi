<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

if(!empty($_GET)) {
    
    $sql = 'DELETE from users WHERE id = ' . $_GET['id'];
    
    if (mysqli_query($connect, $sql)) {
        echo "Користувача видалено";
        header("Location: /admin/users.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
}
    
?>