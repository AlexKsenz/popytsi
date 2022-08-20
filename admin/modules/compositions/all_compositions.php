<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Страви</h1>
    
    <a href="?page=add_composition" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Додати нову страву</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Список страв</h6>
    </div>

   

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Назва страви</th>
                        <th>Опції</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                        $composition = mysqli_query($connect, "SELECT * FROM `composition`");
                        $composition = mysqli_fetch_all($composition);
                        foreach ($composition as $composition) {
                    ?> 

                    <tr>
                        <td><?= $composition[0] ?></td>
                        <td><?= $composition[1] ?></td>
                        <td>
                            <a class="btn btn-light" href="/admin/ttks.php?id=<?= $composition[0] ?>"><i class="fas fa fa-bars"></i>    Інгредієнти</a>
                            <a class="btn btn-light" href="?page=edit_composition&id=<?= $composition[0] ?>"><i class="fas fa-marker"></i>  Змінити назву</a>
                            <a class="btn btn-dark" href="/admin/modules/compositions/vendor/delete_composition.php?id=<?= $composition[0] ?>">
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
