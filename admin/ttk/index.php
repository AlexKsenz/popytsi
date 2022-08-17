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
                <input type="button" onclick="window.location.href ='/admin/composition/';" value="Повернутися до Назви страви" />
            </form>

    <table>
        <tr>
            <th>id</th>
            <th>Складові</th>
            <th>Опції</th>

        </tr>

        <?php


$ttk_id = $_GET['id'];
$ttk = mysqli_query($connect, "SELECT ttk.id, id_composition, products_name FROM ttk JOIN products ON products_id = products.id WHERE id_composition = '$ttk_id'");
       
$ttk = mysqli_fetch_all($ttk);		




            foreach ($ttk as $ttk) {
                ?>
                    <tr>
                        <td><?= $ttk[0] ?></td>
                        <td><?= $ttk[2] ?></td>


                        <td><a style="color: red;" href="vendor/delete.php?id=<?= $ttk[0] ?>">Delete</a></td>
                     
                    
                    </tr>
                    
            
                    
      
                <?php
            }
        ?>
    </table>
             <td><a style="color: red;" href="/admin/ttk/newttk.php?id=<?= $ttk[1] ?>">додати новий продукт</a></td>
</body>
</html>