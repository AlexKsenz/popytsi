<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/header.php");
?>


<!-- Page Wrapper -->
<div id="wrapper">
    <?php 
    require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/sidebar.php");
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <?php
                        if (isset($_SESSION["user_id"]) && ($_SESSION["user_id"] != null)){
                            $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
                            $result = mysqli_query($connect, $sql);
                            $user = $result->fetch_assoc();
                        }
                    ?>    
                    <h1 class="h3 mb-0 text-gray-800">Вітаю, адмін - <?php echo $user['username']; ?>!</h1>
                    
                    <a href="/modal/logout.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                         Вихід <i class="fas fa-sign-out-alt fa-sm "></i></a>
                </div>
            </div>
            <!-- /.container-fluid -->


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Шукаю..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </nav>
                <!-- End of Topbar -->
                    
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/admin/partials/footer.php");
?>

