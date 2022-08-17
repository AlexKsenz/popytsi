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


    $select = "SELECT * FROM `ttk` WHERE `id` = '$id'";

    $article = $connect->query($select)->fetch_assoc();

    $select_2 = "SELECT * FROM `products`";

    $categories = $connect->query($select_2);


?>



    <h3>Додати продукт</h3>
    <form action="vendor/create.php" method="post">
        <input type="hidden" name="id" value="<?= $ttk['id'] ?>">
        <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
        <div class="form-group">
            <select class="form-control" name="products_id">
            <?php while (($category = $categories->fetch_assoc()) > 0): ?>
            <?php if($category['id'] == $article ['products_id']): ?>  
                <option selected="" value="<?=$category['id'];?>"><?=$category['products_name'];?></option>
        <?php else: ?>
            <option value="<?=$category['id'];?>"><?=$category['products_name'];?></option>
        <?php endif; ?>
    <?php endwhile; ?>
        </select>
        </div>  
        </div>   
        </div>     
</div>    
<button type="submit">Зберегти</button>
</form>
</body>
</html>


