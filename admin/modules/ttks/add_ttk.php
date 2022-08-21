<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");
?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php 
    require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/sidebar.php");
    ?>
    <script>
        var activeSelectedLink = document.getElementById("navLinkCompositions");
        // додавання класу для виділення активної сторінки
        activeSelectedLink.classList.add('selected');
    </script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            
            <!-- Begin Page Content -->
            <!-- Підключення таблиці інгредієнтів -->
            <div class="container-fluid">
                
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Технічні карти</h1>
                    
            </div>



            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <?php  
                      $sql =  "SELECT * FROM `composition` WHERE id =" . $_GET["id"];
                      $result = mysqli_query($connect, $sql);
                      $composition = $result->fetch_assoc();  
                    // var_dump ($composition["composition"]);
                    // die(); 
                    ?>
                <h6 class="font-weight-bold text-primary">Додавання нового інгредієнту до страви</h6>
                <h4 class="font-weight-bold text-uppercase"><?= $composition["composition"] ?></h4>

                </div>
                
                <div class="card-body">
                <?php
                    $id = $_GET ['id'];
                    $select = "SELECT * FROM `ttk` WHERE `id` = '$id'";
                    $article = $connect->query($select)->fetch_assoc();
                    $select_2 = "SELECT * FROM `products`";
                    $categories = $connect->query($select_2);
                ?>

                    <!-- <form class="user" action="?page=add_product" method="POST"> -->
                    <form class="user" action="/admin/modules/ttks/vendor/create.php" method="POST">
                        <input type="hidden" name="id">
                        <!-- <input type="hidden" name="id" value="<?= $ttk['id'] ?>"> -->
                        
                        <div class="form-group"> 
                            <p>Вибрати інгредієнт:</p>
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

                        <button type="submit" class="btn btn-success btn-user btn-block">Додати новий інгредієнт</button>
                    </form>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->


<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/footer.php");
?>
