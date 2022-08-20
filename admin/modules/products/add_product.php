<h1 class="h3 mb-2 text-gray-800">Інгредієнт</h1>
<p class="mb-4"> 
    <?php 
    // require_once '/config/db.php';

    // if(!empty($_POST)) {
    //     $sql = "INSERT INTO `products`(`products_name`, `measurement_id`, `amount`, `price`) 
    //     VALUES ('" . $_POST['products_name'] . "', '" . $_POST['measurement_id'] . "', '" . $_POST['amount'] . "','" . $_POST['price'] . "')";
    //     if (mysqli_query($connect, $sql)) {
    //         echo 'Інгредієнт додано. <a href="/admin/products.php">Повернутись</a>';
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    //     }
    // }
   

    // $id = $_GET ['id'];
    // $select = "SELECT * FROM `products` WHERE `id` = '$id'";
 
    // $select = "SELECT * FROM products WHERE id = " . $_GET['id'];

    // $article = $connect->query($select)->fetch_assoc();

    $select_2 = "SELECT * FROM `measurement`";

    $categories = $connect->query($select_2);
?>


</p>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Додавання нового інгредієнту</h6>
    </div>
    
    <div class="card-body">

        <!-- <form class="user" action="?page=add_product" method="POST"> -->
        <form class="user" action="/admin/modules/products/vendor/add_update.php" method="POST">
            <input type="hidden" name="id">
            <!-- <input type="hidden" name="id" value="<?= $product['id'] ?>"> -->

            <div class="form-group">
                <p>Назва інгредієнту</p>
                <input type="text" class="form-control form-control-user" name="products_name" required>
                <!-- <input type="text" class="form-control form-control-user" name="products_name" value="<?= $product['products_name'] ?>" required> -->

            </div>

            <div class="form-group"> 
                <p>Одиниця виміру:</p>
                <select class="form-control" name="measurement_id" required>
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
                <input type="number" class="form-control form-control-user" step="0.1" name="amount" required> 

                <!-- <input type="number" class="form-control form-control-user" step="0.1" name="amount" value="<?= $product['amount'] ?>" required>  -->
            </div>

            <div class="form-group">
                <p>Ціна (грн):</p>
                <input type="number" class="form-control form-control-user" step="0.1" name="price" required> 

                <!-- <input type="number" class="form-control form-control-user" step="0.1" name="price" value="<?= $product['price'] ?>" required>  -->
            </div>

            <button type="submit" class="btn btn-success btn-user btn-block">Створити новий інгредієнт</button>
        </form>
    </div>
</div>
