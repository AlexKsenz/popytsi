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
    <title>Нова страва</title>
</head>
<body>
    <h3>Нова страва</h3>
    <form action="vendor/create.php" method="post">
        <input type="hidden" name="id" value="<?= $composition['id'] ?>">
        <p>ім’я страви</p>
        <textarea name="composition"><?= $composition['composition'] ?></textarea> <br> <br>
           
    <button type="submit">зберегти</button>
</form> 
</body>
</html>