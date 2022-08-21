<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Користувачі</h1>
    
    <a href="?page=add_user" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Додати користувача</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Список користувачів</h6>
    </div>

   

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ім'я користувача</th>
                        <th>Телефон</th>
                        <th>E-mail</th>
                        <th>Роль</th>
                        <th>Пароль</th>
                        <th>Опції</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                        // виводимо всі дані окрім того, чия зараз сессія (адміна)
                        $sql = "SELECT * FROM users WHERE id !=" . $userID;
                        $result = mysqli_query($connect, $sql); 
                        // var_dump($result);
                        while($row = $result->fetch_assoc()) // отримуємо всі рядки в циклі по одному
                        {
                    ?> 

                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a class="btn btn-light" href="?page=edit_user&id=<?php echo $row['id']; ?>"><i class="fas fa-marker"></i>  Редагувати</a>
                            <a class="btn btn-dark" href="/admin/modules/users/delete_user.php?id=<?php echo $row['id']; ?>">
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
