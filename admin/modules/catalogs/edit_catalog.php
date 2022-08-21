<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");
?>

<!-- Page Wrapper -->
<div id="wrapper">
    <?php 
    require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/sidebar.php");
    ?>
    <script>
        var activeSelectedLink = document.getElementById("navLinkCatalog");
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
                <h1 class="h3 mb-0 text-gray-800">Каталог</h1>
                    
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="font-weight-bold text-primary">Редагування картки каталогу</h6>
                </div>
                
                <div class="card-body">
                    <?php
                        $catalogs_id = $_GET ['id'];
                        $select = mysqli_query($connect, "SELECT * FROM `catalogs` WHERE `id` = '$catalogs_id'");
                        $select_2 = "SELECT * FROM `composition`";
                        $select_3 = "SELECT * FROM `category`";
                        $article = mysqli_fetch_assoc($select);
                        $categories = $connect->query($select_2);
                        $categories2 = $connect->query($select_3);
                    ?>


                    <form class="user" action="/admin/modules/catalogs/vendor/edit_catalog.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $catalogs['id'] ?>">
                        
                        <div class="form-group"> 
                            <p>Назва страви:</p>
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

                        <div class="form-group"> 
                            <p>Категорія:</p>
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

                        <div class="form-group">
                            <p>Ціна (грн):</p>
                            <input type="number" class="form-control form-control-user" step="0.1" name="price" value="<?= $article['price'] ?>">
                        </div>

                        <div class="form-group">
                            <p>Вага (гр)/Об'єм (л):</p>
                            <input type="number" class="form-control form-control-user" step="0.1" name="amount_catalog" value="<?= $article['amount_catalog'] ?>"> <br> <br> 
                        </div>
                        <div class="comments">
                            <p>Коментарі:</p>
                            <input type="text" class="form-control form-control-user"  name="comments" value="<?= $article['comments'] ?>"> <br> <br> 
                        </div>
                        <div class="form-group">
                            <p>Завантажити зображення:</p>
                            <td><img src="/assets/img/products/<?= $article['imagename'] ?>" style="height: 50px; width: 50px;" ></td>
                            <input type="file"name="filename" size="10">  
                        </div>

                        <button type="submit" class="btn btn-success btn-user btn-block">Зберегти зміни</button>
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
