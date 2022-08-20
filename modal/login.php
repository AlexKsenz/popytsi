<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
?>


<!-- Button for Admin -->
<button class="btnLog-admin" onclick="window.location.href='/admin'">ПіцАдмінКа</button>

<!-- Button to open the modal login form -->
<button class="btnLog-in-out" onclick="document.getElementById('modalWindowLogin').style.display='block'">Вхід <i class="icon-sign-in"></i></button>

<!-- Button for log-out -->
<button class="btnLog-in-out" onclick="window.location.href='/modal/logout.php'">Вихід <i class="icon-sign-out"></i></button>

<!-- The Modal -->
<div id="modalWindowLogin" class="modal">

    <!-- Modal Content -->
    <form action="#" class="modal-content animate" method="POST">
        <span onclick="document.getElementById('modalWindowLogin').style.display='none'" class="close" title="">&times;</span>
        <div class="modal-container">
            <img src="../assets/icons/logo.png" class="logo-avatar">
            <h3>Вхід на сайт</h3>
            <p>Ще не зареєстрований?<br /><a href="/modal/register.php"> Реєстрація</a></p>

            <div class="notification">
                <p>
                    <!-- Если все поля заполненные
            идёт сверка данных заполненных и тех что в базе данных
            если совпадает - происходит авторизизация и начинается сессия пользователя в окне приложения-->
                    <?php
                    if (!empty($_POST)) {
                        $sql = "SELECT * FROM `users` 
                        WHERE `email` = '" . $_POST['email'] . "' 
                        AND `password` = '" . $_POST['password'] . "'
                        ";
                        $result = mysqli_query($connect, $sql);
                        $user = $result->fetch_assoc();
                        if ($user) {
                            $_SESSION["user_id"] = $user['id'];
                            header("Location: /");
                        } else {
                            $_SESSION["user_id"] = null;
                            echo 'Заповніть вірно свої дані, <br> вказані при реєстрації!';
                        }
                    }
                    ?>
                </p>
            </div>

            <input type="email" name="email" placeholder="Ваш email" required>
            <input type="password" name="password" placeholder="Пароль" required>

            <button class="btnEnter" type="submit">Увійти</button>
            <p>Продовжуючи, ви погоджуєтесь зі збором та обробкою персональних даних та користувальницькою угодою.</p>
        </div>
    </form>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?>