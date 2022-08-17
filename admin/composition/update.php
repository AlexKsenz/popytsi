<?php


    require_once 'config/connect.php';


    $composition_id = $_GET['id'];

 
    $composition = mysqli_query($connect, "SELECT * FROM `composition` WHERE `id` = '$composition_id'");


    $composition = mysqli_fetch_assoc($composition);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Змінити назву продукти</title>
</head>
<body>
    <h3>Змінити назву продукти</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $composition['id'] ?>">
        <p>Назва страви</p>
        <input type="text" name="composition" value="<?= $composition['composition'] ?>"> <br> <br>

        <button type="submit">Підтвердити</button>
    </form>
</body>
</html>
