<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новий продукт</title>
</head>
<body>
    <?php

require_once 'config/connect.php';


    $id = $_GET ['id'];


    $select = "SELECT * FROM `products` WHERE `id` = '$id'";

    $article = $connect->query($select)->fetch_assoc();

    $select_2 = "SELECT * FROM `measurement`";

    $categories = $connect->query($select_2);
?>


    <h3>Новий продукт</h3>
    <form action="vendor/create.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>ім’я продукту</p>
        <input type="text" name="products_name" value="<?= $product['products_name'] ?>">

        <p>Description</p>
        <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
        <div class="form-group">
            <select class="form-control" name="measurement_id">
            <?php while (($category = $categories->fetch_assoc()) > 0): ?>
            <?php if($category['id'] == $article ['measurement_id']): ?>  
                <option selected="" value="<?=$category['id'];?>"><?=$category['measurement'];?></option>
        <?php else: ?>
            <option value="<?=$category['id'];?>"><?=$category['measurement'];?></option>
        <?php endif; ?>
    <?php endwhile; ?>
        </select>
        </div>  
        </div>   
        </div>     
</div>  

            <p>Кількість</p>
        <input type="number" step="0.1" name="amount" value="<?= $product['amount'] ?>"> <br> <br> 
       <p>Ціна</p>
        <input type="number" step="0.1" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button type="submit">Зберегти</button>
    </form>
</body>
</html>


