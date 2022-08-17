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

		
</form>

            <form>
                <input type="button" onclick="window.location.href ='/admin/catalog/newcatalog.php';" value="додати новий продукт" />
            </form>

    <table>
        <tr>
            <th>id</th>
            <th>Назва страви</th>
            <th>Категорія</th>
            <th>Ціна</th>
            <th>Вага</th>
            <th>Фото</th>
            <th>Опції</th>
        </tr>

        <?php




$catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id;");

            $catalogs = mysqli_fetch_all($catalogs);

            foreach ($catalogs as $catalogs) {
                ?>
                    <tr>
                        <td><?= $catalogs[0] ?></td>
                        <td><?= $catalogs[1] ?></td>
                        <td><?= $catalogs[2] ?></td>
                        <td><?= $catalogs[3] ?> грн</td>
                        <td><?= $catalogs[4] ?> г</td>
                        <td><img src="/admin/catalog/vendor/upload/<?= $catalogs[5] ?>" style="height: 50px; width: 50px;" ></td>

                        <td><a href="update.php?id=<?= $catalogs[0] ?>">Update</a>
                        <a style="color: red;" href="vendor/delete.php?id=<?= $catalogs[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>