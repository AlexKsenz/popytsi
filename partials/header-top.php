
        <ul class="menu">
            <li class="menu__item shedule">
                <img src="/assets/icons/clock.svg" alt="clock">
                <p>Працюємо <br>
                    з 10:00 до 21:30</p>
            </li>
            <li class="menu__item">
                <img src="/assets/icons/phone.svg" alt="phone">
                <a href="tel:380673633366" class="menu__link">(067) 363-33-66</a>
            </li>
            <li class="menu__item">
                <img src="/assets/icons/email.svg" alt="mail">
                <a href="mailto:popitsy@gmail.com" class="menu__link">popitsy@gmail.com</a>
            </li>
            <li class="menu__item">
                <img src="/assets/icons/place.svg" alt="placeholder">
                <a href="#" class="menu__link">Наша адреса</a>
            </li>
            <li class="menu__item menu__social">
                <a href="#2" class="menu__link"><img src="/assets/icons/insta.svg" alt="instagram link"></a>
                <a href="#1" class="menu__link"><img src="/assets/icons/facebook.svg" alt="facebook link"></a>
            </li>
            
            <li >
                <?php 
                if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
                    $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
                    $result = mysqli_query($connect, $sql);
                    $user = $result->fetch_assoc();

                    if($user['role'] == "admin") {
                ?>
                <!-- Button for Admin -->
                <button class="btnLog-admin" type="button" onclick="window.location.href='/admin'">ПіцАдмінКа</button> 
                <?php 
                    }    
                }
                ?>
            </li>
            <li>
                <?php 
                if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
                ?>
                <!-- Button for log-out -->
                <button class="btnLog-in-out" onclick="window.location.href='/modal/logout.php'">Вихід <i class="icon-sign-out"></i></button>
                <?php } 
                else {
                ?>
                <!-- Button to open the modal login form -->
                <button class="btnLog-in-out" onclick="document.getElementById('modalWindowLogin').style.display='block'">Вхід <i class="icon-sign-in"></i></button>
                <?php 
                }
                ?>
            </li>
                     
        </ul>
   
<!-- The Modal WindowLogin -->
<div id="modalWindowLogin" class="modal">

    <!-- Modal Content -->
    <form action="#" class="modal-content animate" method="POST">
        <div class="modal-container">
            <span onclick="document.getElementById('modalWindowLogin').style.display='none'" class="close" title="">&times;</span>
            <img src="../assets/icons/logo.png" class="logo-avatar">
            <h3>Вхід на сайт</h3>
            <h4>Ще не зареєстрований?<br /></h4>
            <!-- Button to open the modal login form -->
            <button  class="btnRegister" onclick="document.getElementById('modalWindowRegisret').style.display='block'">Реєстрація</i></button>

            <div class="notification">
                <p>
                    <?php
                    if (isset($_REQUEST['LOG'])) {
                        if (!empty($_POST)) {
                            $sql = "SELECT * FROM `users` 
                            WHERE `email` = '" . $_POST['email'] . "' 
                            AND `password` = '" . $_POST['password'] . "'
                            ";
                            $result = mysqli_query($connect, $sql);
                            $user = $result->fetch_assoc();
                            if ($user) {
                                $_SESSION["user_id"] = $user['id'];
                                ?>
                                <script>
                                    window['location']['reload']();
                                    window.location.href=window.location.href.slice(0, -1);
                                </script>
                                <?php
                            } else {
                                /*Проверяем существует ли у нас такой пользователь в БД*/
                                $sql = "SELECT `email` FROM `users` WHERE `email` = '" . $_POST['email'] . "'";
                                $result = mysqli_query($connect, $sql);
                                $rows = $result->fetch_assoc();
                                /*Если существует такой пользователь в БД то выдаем сообщение*/
                                if($rows <= 0) {
                                ?>
                                <script>
                                    document.getElementById('modalWindowLogin').style.display = 'block';
                                </script>
                                <?php
                                echo 'e-mail: '. $_POST['email'] .' ще не зареєстрований! <br> Перейдіть до реєстрації'; 
                                } else {
                                ?>
                                <script>
                                    document.getElementById('modalWindowLogin').style.display = 'block';
                                </script>
                                <?php

                                $_SESSION["user_id"] = null;
                                echo 'Не вірно введений пароль, <br> вказаний при реєстрації!';
                                }
                            }
                        }
                    }
                    ?>
                </p>
            </div>

            <input type="email" name="email" placeholder="Ваш email" required>
            <input type="password" name="password" placeholder="Пароль" required>

            <button class="btnEnter" name="LOG" type="submit">Увійти</button>
            <p>Продовжуючи, ви погоджуєтесь зі збором та обробкою персональних даних та користувальницькою угодою.</p>
        </div>
    </form>
</div>

<!-- The Modal WindowRegisret-->
<div id="modalWindowRegisret" class="modal">

    <!-- Modal Content -->
    <form action="#" class="modal-content animate" method="POST">
        <div class="modal-container">
            <span onclick="document.getElementById('modalWindowRegisret').style.display='none'" class="close" title="">&times;</span>
            <img src="../assets/icons/logo.png" class="logo-avatar">
            <h3>Реєстрація</h3>
            <h4>Вже зареєстрований?<br /></h4>
            <button  class="btnRegister" onclick="document.getElementById('modalWindowRegisret').style.display='none'">Увійти</i></button>
            <div class="notification">
                <p>

                    <?php
                    if (isset($_REQUEST['REG'])) {
                    /*Проверяем существует ли у нас такой пользователь в БД*/
                    $sql = "SELECT `email` FROM `users` WHERE `email` = '" . $_POST['email'] . "'";
                    $result = mysqli_query($connect, $sql);
                    $rows = $result->fetch_assoc();
                    /*Если существует такой пользователь в БД то выдаем сообщение*/
                    if($rows > 0) {
                        ?>
                        <script>
                            document.getElementById('modalWindowRegisret').style.display = 'block';
                        </script>
                        <?php
                        echo 'email: '. $_POST['email'] .' вже зареєстрований!'; 
                    } 
                    /*Если не существует такой пользователь в БД то проверяем совпадение пароля и повтора пароля*/
                    else if ($_REQUEST['password'] !== $_REQUEST['password_rep']) {
                        ?>
                        <script>
                            document.getElementById('modalWindowRegisret').style.display = 'block';
                        </script>
                        <?php
                        echo 'Пароль не збігається';
                        }  
                    /*Если не существует такой пользователь в БД и есть совпадение пароля и повтора пароля,
                    то идёт создание новой записи в БД о новом пользователе*/
                        else if (!empty($_POST)) {
                        // echo $_POST['username'] . " - " . " - " . $_POST['phone'];
                        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `phone`) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['phone'] . "');";
                        if (mysqli_query($connect, $sql)) {
                            ?>
                        <script>
                            document.getElementById('modalWindowRegisret').style.display = 'none';
                            window.location.href=window.location.href.slice(0, -1);
                        </script>
                        <?php
                            $sql = "SELECT * FROM `users` 
                            WHERE `email` = '" . $_POST['email'] . "' 
                            AND `password` = '" . $_POST['password'] . "'
                            ";
                            $result = mysqli_query($connect, $sql);
                            $user = $result->fetch_assoc();
                            if ($user) {
                                $_SESSION["user_id"] = $user['id'];
                                ?>
                                <script>
                                    window['location']['reload']();
                                </script>
                                <?php
                            }
                        }
                         }
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
