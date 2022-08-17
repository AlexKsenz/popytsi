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
                <input type="button" onclick="window.location.href ='/admin/products/newproducts.php';" value="додати новий продукт" />
            </form>

    <table>
        <tr>
            <th>id</th>
            <th>Назва продукту</th>
            <th>вимір</th>
            <th>Одиниць</th>
            <th>Ціна</th>
            <th>Опції</th>
        </tr>

        <?php


$products = mysqli_query($connect, "SELECT products.id, products_name, measurement, amount, price FROM products JOIN measurement ON measurement_id = measurement.id");

            $products = mysqli_fetch_all($products);

            foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[4] ?> грн</td>

                        <td><a href="update.php?id=<?= $product[0] ?>">Update</a>
                        <a style="color: red;" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>