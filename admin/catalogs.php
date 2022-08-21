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
                <h1 class="h3 mb-0 text-gray-800">Каталог страв</h1>
                
                <a href="/admin/modules/catalogs/add_catalog.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Додати новий продукт в каталог</a>

            </div>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
         

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Назва страви</th>
                                    <th>Категорія</th>
                                    <th>Ціна (грн)</th>
                                    <th>Вага</th>
                                    <th>Коментарі</th>
                                    <th>Фото</th>
                                    
                                    <th>Опції</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 
                                    $catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename, comments FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id;");
                                    $catalogs = mysqli_fetch_all($catalogs);
                                    foreach ($catalogs as $catalogs) {
                                ?> 

                                <tr>
                                    <td><?= $catalogs[0] ?></td>
                                    <td><?= $catalogs[1] ?></td>
                                    <td><?= $catalogs[2] ?></td>
                                    <td><?= $catalogs[3] ?></td>
                                    <td><?= $catalogs[4] ?> г</td>
                                    <td><?= $catalogs[6] ?></td>
                                    <td><img src="modules/catalogs/vendor/upload/<?= $catalogs[5] ?>" style="height: 50px; width: 50px;"></td>
                                    <td>

                                        <a class="btn btn-light" href="/admin/modules/catalogs/edit_catalog.php?id=<?= $catalogs[0] ?>"><i class="fas fa-marker"></i>  Редагувати</a>
                                        <a class="btn btn-dark" href="/admin/modules/catalogs/vendor/delete_catalog.php?id=<?= $catalogs[0] ?>">
                                        <i class="fas fa-trash-alt"></i>    Видалити</a>
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
