<?php



    require_once 'config/connect.php';

  
    $users_id = $_GET['id'];

 

    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$users_id'");


    $users = mysqli_fetch_assoc($users);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update users</title>
    <link rel="stylesheet" type="text/css" href="/css/updete.css">
</head>
<body>
    <h3>Update users</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $users['id'] ?>">
        <p>username</p>
        <input type="text" name="username" value="<?= $users['username'] ?>">
        <p>email</p>
        <textarea name="email"><?= $users['email'] ?></textarea>
        <p>phone</p>
        <input type="number" name="phone" value="<?= $users['phone'] ?>"> <br> <br>
        <p>role</p>
        <input type="text" name="role" value="<?= $users['role'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>




</body>
</html>