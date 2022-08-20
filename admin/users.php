<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");
?>



<!-- Page Wrapper -->
<div id="wrapper">
    <?php 
    require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/sidebar.php");
    ?>
    <script>
        var activeSelectedLink = document.getElementById("navLinkUser");
        // додавання класу для виділення активної сторінки
        activeSelectedLink.classList.add('selected');
    </script>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                
                <!-- Begin Page Content -->
                <!-- Підключення таблиці користувачів -->
                <div class="container-fluid">
                    <?php
                    // Робимо сторінку користувачів статичною, щоб в ній же відображати редагування та видалення 
                    if(empty($_GET)){
                        require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/users/all.php");
                    } else {
                        //------ Перевірка яка відбувається відправка 
                        // echo '<pre>' , var_dump($_GET) , '</pre>';
                        switch ($_GET['page']) {
                            case 'edit_user':
                                require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/users/edit_user.php");
                                break;
                            case 'add_user':
                                require($_SERVER['DOCUMENT_ROOT'] . "/admin/modules/users/add_user.php");
                                break;
                        }
                    }
                    ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><i class="far fa-smile-wink"></i></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->


</div>
<!-- End of Page Wrapper -->


<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/footer.php");
?>
