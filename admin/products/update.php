<?php

    require_once 'config/connect.php';

 
    $product_id = $_GET['id'];

 
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    $select_2 = "SELECT * FROM `measurement`";
    
    $categories = $connect->query($select_2);

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>products_name</p>
        <input type="text" name="products_name" value="<?= $product['products_name'] ?>">
        <p>Description</p>
        <div class="container">
    <div class="row text-center">
        <div class="col-md-12">
        <div class="form-group">
            <select class="form-control" name="measurement_id">
            <?php while (($category = $categories->fetch_assoc ()) > 0): ?>
            <?php if($category['id'] == $product ['measurement_id']): ?>  
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
        <p>amount</p>
        <input type="number" name="amount" value="<?= $product['amount'] ?>"> <br> <br>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
