<?php
        require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
    <body>


    <table class="table">
                      <thead>
                              <tr>
            
                            <th>id</th>
                            <th>username</th>
                            <th>email</th>
                            <th>password</th>
                            <th>phone</th>
                            <th>role</th>
                            <th>options</th>


             
                            
        </tr>
        </thead>
        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                    </tbody>
                    <?php

$users = mysqli_query($connect, "SELECT * FROM `users`");
            
        $users = mysqli_fetch_all($users);

        foreach ($users as $users) {
    ?>
                    <tr>
                        <td><?= $users[0] ?></td>
                        <td><?= $users[1] ?></td>
                        <td><?= $users[2] ?></td>
                        <td><?= $users[3] ?></td>
                        <td><?= $users[4] ?></td>
                        <td><?= $users[5] ?></td>
                       
                        <td>
                            <a href="update.php?id=<?= $users[0] ?>">Update</a>
                        <a style="color: red;" href="vendor/delete.php?id=<?= $users[0] ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>
