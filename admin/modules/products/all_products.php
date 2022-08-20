<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Інгредієнти</h1>
    
    <a href="?page=add_product" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Додати новий інгредієнт</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Список інгредієнтів</h6>
    </div>

   

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Назва інгредієнту</th>
                        <th>Одиниця виміру</th>
                        <th>Кількість</th>
                        <th>Ціна (грн)</th>
                        <th>Опції</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                    $products = mysqli_query($connect, "SELECT products.id, products_name, measurement, amount, price FROM products JOIN measurement ON measurement_id = measurement.id");
                    $products = mysqli_fetch_all($products);
                    foreach ($products as $product) {
                    // var_dump($products);
                    ?> 

                    <tr>
                        <td><?= $product[0]; ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[4] ?></td>
                        <td>
                            <a class="btn btn-light" href="?page=edit_product&id=<?= $product[0]; ?>"><i class="fas fa-marker"></i>  Редагувати</a>
                            <a class="btn btn-dark" href="/admin/modules/products/vendor/delete_product.php?id=<?= $product[0] ?>">
                            <i class="fas fa-trash-alt"></i>  Видалити</a>
                        </td>
                    </tr>
                    
                    <?php 
                        }
                    
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
