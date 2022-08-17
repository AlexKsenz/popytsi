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


    $select = "SELECT * FROM `catalogs` WHERE `id` = '$id'";

    $article = $connect->query($select)->fetch_assoc();

    $select_2 = "SELECT * FROM `composition`";

    $categories = $connect->query($select_2);

    $select_3 = "SELECT * FROM `category`";

    $categories2 = $connect->query($select_3);

?>


    <h3>Каталог страви</h3>
    <form action="vendor/create.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $catalogs['id'] ?>">


        <p>Страва</p>
        <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
        <div class="form-group">
            <select class="form-control" name="id_composition">
            <?php while (($category = $categories->fetch_assoc()) > 0): ?>
            <?php if($category['id'] == $article ['id_composition']): ?>  
                <option selected="" value="<?=$category['id'];?>"><?=$category['composition'];?></option>
        <?php else: ?>
            <option value="<?=$category['id'];?>"><?=$category['composition'];?></option>
        <?php endif; ?>
    <?php endwhile; ?>
        </select>
        </div>  
        </div>   
        </div>     
</div>  
<p>Категорія</p>
        <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
        <div class="form-group">
            <select class="form-control" name="id_category">
            <?php while (($category = $categories2->fetch_assoc()) > 0): ?>
            <?php if($category['id'] == $article ['id_category']): ?>  
                <option selected="" value="<?=$category['id'];?>"><?=$category['category'];?></option>
        <?php else: ?>
            <option value="<?=$category['id'];?>"><?=$category['category'];?></option>
        <?php endif; ?>
    <?php endwhile; ?>
        </select>
        </div>  
        </div>   
        </div>     
</div>

        <p>Ціна</p>
        <input type="number" step="0.1" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <p>Вага</p>
        <input type="number" step="0.1" name="amount_catalog" value="<?= $product['amount_catalog'] ?>"> <br> <br> 

   
   
           <p>Загрузити зображення</p>

        <input type="file"name="filename" size="10"> <br> <br> 


           <button type="submit">Зберегти</button>
         </form> 



</body>
</html>


