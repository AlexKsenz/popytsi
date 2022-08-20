<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");
?>


<!-- Page Wrapper -->
<div id="wrapper">
    <?php 
    require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/sidebar.php");
    ?>
    <script>
        var activeSelectedLink = document.getElementById("navLinkProducts");
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
                
                <?php
                    // Робимо сторінку користувачів статичною, щоб в ній же відображати редагування та видалення 
                    if(empty($_GET)){
                        require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/products/all_products.php");
                    } else {
                        //------ Перевірка яка відбувається відправка 
                        // echo '<pre>' , var_dump($_GET) , '</pre>';
                        switch ($_GET['page']) {
                            case 'edit_product':
                                require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/products/edit_product.php");
                                break;
                            case 'add_product':
                                require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/products/add_product.php");
                                break;
                        }
                    }
                    ?>




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
