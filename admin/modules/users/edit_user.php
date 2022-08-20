<h1 class="h3 mb-2 text-gray-800">Користувачі</h1>
<p class="mb-4"> 
    <?php 
    if(!empty($_POST)) {
            $sql = "UPDATE `users` SET `username` = '" . $_POST['name'] . "', `phone` = '" . $_POST['phone'] . "', `email` = '" . $_POST['email'] . "', 
            `password` = '" . $_POST['password'] . "' WHERE `id` = " . $_GET['id'] . ";";

            if (mysqli_query($connect, $sql)) {
                // echo '<h1 class="h3 mb-2 text-gray-800">Дані оновлено. <a href="/admin/users.php">Повернутись</a></h1>';
                echo 'Дані оновлено. <a href="/admin/users.php">Повернутись</a>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }

    $sql = "SELECT * FROM users WHERE id = " . $_GET['id'];
    $result =  mysqli_query($connect, $sql);
    $row = $result->fetch_assoc();
    ?>
</p>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Редагування</h6>
    </div>
    
    <div class="card-body">
        <form class="user" action="?page=edit_user&id=<?php echo $_GET['id']; ?>" method="POST">
            
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="username" placeholder="Ім'я"
                name="name" value="<?php echo $row['username']; ?>">
            </div>
            
            <div class="form-group">
                <input type="tel" class="form-control form-control-user" id="phone" placeholder="Телефон"
                name="phone" value="<?php echo $row['phone']; ?>">
            </div>

            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="email" placeholder="E-mail"
                name="email" value="<?php echo $row['email']; ?>">
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-user" id="password" placeholder="Пароль" 
                name="password" value="<?php echo $row['password']; ?>">
            </div>

            <button type="submit" class="btn btn-success btn-user btn-block">Зберегти зміни</button>
        </form>
    </div>
</div>