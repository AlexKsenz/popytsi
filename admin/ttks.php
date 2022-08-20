<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");
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
                <?php $_SERVER[QUERY_STRING]; 
                

                ?>
                <a href="/admin/modules/ttks/add_ttk.php?<?= $_SERVER['QUERY_STRING']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Додати новий інгредієнт до страви</a>

            </div>

            <p class="mb-4"> 
                <a href="/admin/compositions.php">Повернутись до назв страв</a>
            </p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Перелік інгредієнтів страви</h6>
                </div>
           

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Складові</th>
                                    <th>Опції</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php 
                                    $ttk_id = $_GET['id'];
                                    $ttk = mysqli_query($connect, "SELECT ttk.id, id_composition, products_name FROM ttk JOIN products ON products_id = products.id WHERE id_composition = '$ttk_id'");
                                    $ttk = mysqli_fetch_all($ttk);
                                    foreach ($ttk as $ttk) {
                                ?> 

                                <tr>
                                    <td><?= $ttk[0] ?></td>
                                    <td><?= $ttk[2] ?></td>
                                    <td>
                                        <!-- <a class="btn btn-light" href="/admin/ttk/index.php?id=<?= $composition[0] ?>"><i class="fas fa fa-bars"></i>    Детальніше</a>
                                        <a class="btn btn-light" href="?page=edit_composition&id=<?= $composition[0] ?>"><i class="fas fa-marker"></i>  Змінити назву</a> -->
                                        <a class="btn btn-dark" href="/admin/modules/ttks/vendor/delete_ttk.php?id=<?= $ttk[0] ?>">
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
