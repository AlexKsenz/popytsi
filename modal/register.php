<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
?>


<!-- Button to open the modal login form -->
<button class="btnLog-in-out" onclick="document.getElementById('modalWindowRegisret').style.display='block'">Реєстрація</i></button>


<!-- The Modal -->
<div id="modalWindowRegisret" class="modal">

    <!-- Modal Content -->
    <form action="#" class="modal-content animate" method="POST">
        <span onclick="document.getElementById('modalWindowRegisret').style.display='none'" class="close" title="">&times;</span>
        <div class="modal-container">
            <img src="../assets/icons/logo.png" class="logo-avatar">
            <h3>Реєстрація</h3>
            <p>Вже зареєстрований?<br /><a href="/modal/login.php"> Увійти</a></p>

            <div class="notification">
                <p>

                    <?php
                    if (!empty($_POST)) {
                        echo $_POST['username'] . " - " . " - " . $_POST['phone'];
                        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `phone`) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['phone'] . "');";
                        if (mysqli_query($connect, $sql)) {
                            echo "Ви успішно зареєстровані<br/>";
                            header('Refresh: 3; URL=/modal/login.php');
                            echo 'Через 5 секунд Ви будете <br> автоматично перенаправлені до входу в особистий кабінет!';
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                        }
                        mysqli_close($connect);
                    }
                    ?>
                </p>
            </div>
            <input type="username" id="username" name="username" placeholder="Ваше ім’я" required>
            <input type="tel" id="phone" name="phone" placeholder="Номер телефону" pattern="[0-9]{10}" required>
            <input type="email" id="email" name="email" placeholder="Ваш email" required>
            <input type="password" id="password" name="password" placeholder="Ваш пароль" required>
            <input type="password" name="password_rep" placeholder="Повторіть ваш пароль" required>
            <button class="btnEnter" name="REG" type="submit">Зареєструватись</button>
            <p>Продовжуючи, ви погоджуєтесь зі збором та обробкою персональних даних та користувальницькою угодою.</p>

        </div>
    </form>
</div>





<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?>