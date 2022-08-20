<h1 class="h3 mb-2 text-gray-800">Інгредієнт</h1>
<p class="mb-4"> 

<?php
    $product_id = $_GET['id'];
 
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    $select_2 = "SELECT * FROM `measurement`";
    
    $categories = $connect->query($select_2);

    $product = mysqli_fetch_assoc($product);
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Редагування</h6>
    </div>
    
    <div class="card-body">
        <form class="user" action="/admin/modules/products/vendor/edit_update.php" method="POST">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            
            <div class="form-group">
                <p>Назва інгредієнту</p>
                <input type="text" class="form-control form-control-user" 
                name="products_name" value="<?= $product['products_name'] ?>">
            </div>


            <div class="form-group"> 
                <p>Одиниця виміру:</p>
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

            <div class="form-group">
                <p>Кількість:</p>
                <input type="number" class="form-control form-control-user" step="0.1" name="amount" value="<?= $product['amount'] ?>"> 
            </div>

            <div class="form-group">
                <p>Ціна (грн):</p>
                <input type="number" class="form-control form-control-user" step="0.1" name="price" value="<?= $product['price'] ?>"> 
            </div>

            <button type="submit" class="btn btn-success btn-user btn-block">Зберегти зміни</button>
        </form>
    </div>
</div>