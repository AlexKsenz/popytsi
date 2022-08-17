<?php

require_once 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
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

            <form>
                <input type="button" onclick="window.location.href ='/admin/composition/newcomposition.php';" value="додати новий продукт" />
            </form>

    <table>
        <tr>
            <th>id</th>
            <th>Назва Страви</th>

            <th>Опції</th>
        </tr>

        <?php


$composition = mysqli_query($connect, "SELECT * FROM `composition`");

            $composition = mysqli_fetch_all($composition);

            foreach ($composition as $composition) {
                ?>
                    <tr>
                        <td><?= $composition[0] ?></td>
                        <td><?= $composition[1] ?></td>

                        <td><a href="/admin/ttk/index.php?id=<?= $composition[0] ?>">Детальніше</a>
                            <a href="update.php?id=<?= $composition[0] ?>">Змінити</a>
                        <a style="color: red;" href="vendor/delete.php?id=<?= $composition[0] ?>">Видалити</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>