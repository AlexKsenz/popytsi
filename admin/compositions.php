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
                
                <?php
                    // Робимо сторінку користувачів статичною, щоб в ній же відображати редагування та видалення 
                    if(empty($_GET)){
                        require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/compositions/all_compositions.php");
                    } else {
                        //------ Перевірка яка відбувається відправка 
                        // echo '<pre>' , var_dump($_GET) , '</pre>';
                        switch ($_GET['page']) {
                            case 'edit_composition':
                                require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/compositions/edit_composition.php");
                                break;
                            case 'add_composition':
                                require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/compositions/add_composition.php");
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
