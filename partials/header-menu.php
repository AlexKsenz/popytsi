<!-- закоментовано щоб робив весь сайт цілком,
для роботи з меню окремо від сайту розкоментуй php скріпти у документі -->

<!-- <?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
?> -->


<!-- <div class="wrapper"> -->

    <!-- header -->
    <header>
        <nav>
            <div class="container">
        <?php
        require($_SERVER['DOCUMENT_ROOT'] . "/partials/header-top.php");
        ?>
            <!-- 
                <ul class="menu">
                    <li class="menu__item shedule">
                        <img src="/assets/icons/clock.png" alt="clock">
                        <p>Працюємо <br>
                            з 10:00 до 21:30</p>
                    </li>
                    <li class="menu__item">
                        <img src="/assets/icons/phone.png" alt="phone">
                        <a href="tel:380673633366" class="menu__link">(067)3633366</a>
                    </li>
                    <li class="menu__item">
                        <img src="/assets/icons/email.png" alt="mail">
                        <a href="mailto:popitsy@gmail.com" class="menu__link">popitsy@gmail.com</a>
                    </li>
                    <li class="menu__item">
                        <img src="/assets/icons/place.png" alt="placeholder">
                        <a href="#" class="menu__link">Наша адреса</a>
                    </li>
                    <li class="menu__item menu__social">
                        <a href="#2" class="menu__link"><img src="/assets/icons/insta.png" alt="instagram link"></a>

                        <a href="#1" class="menu__link"><img src="/assets/icons/facebook.png" alt="facebook link"></a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">Реєстрація</a>
                    </li>
                    <li class="menu__item menu__signin">
                        <a href="/modal/login.php" class="menu__link">Вхід</a>
                        <img src="/assets/icons/sign-in.png" alt="sign-in" class="signin">

                    </li>
                </ul> -->

                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </nav>
    
        <div class="subheader">
            <div class="subheader__container">
                <div class="products">
                    <div class="subheader__logo">
                        <a href="#">
                            <img src="/assets/icons/logo.png" alt="">
                            <p>POPYTSI
                                <br><span> "Вмажемо по пицці?!"</span>
                            </p>
                        </a>
                    </div>

                    <div class="food">
                        <img src="/assets/icons/piza.png" alt="piza">
                        <a href="#piza">Піца</a>
                    </div>


                    <div class="food">
                        <img src="/assets/icons/salad.png" alt="salad">
                        <a href="#salads">Салати</a>
                    </div>
                    <div class="food">
                        <img src="/assets/icons/potables.png" alt="potable">
                        <a href="#potables">
                            Напої</a>
                    </div>
                    <div class="food">
                        <img src="/assets/icons/dessert.png" alt="potable">
                        <a href="#deserts">
                            Десерти</a>
                    </div>

                    <div class="greeting">
                        <p greeting__title>Привіт,
                            <br>
<?php
if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
                    $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
                    $result = mysqli_query($connect, $sql);
                    $user = $result->fetch_assoc();
?>
<span class="username"> <?php echo $user["username"] ?>!</span>
<?php
} else {
?>
<span class="username">гість!</span>

<?php
}
?>

                        </p>
                    </div>
                    <div class="cart">
                        <a href="#">
                            <img src="/assets/icons/cart.png" alt="cart">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        
    </header>
</div>

<!-- закоментовано щоб робив весь сайт цілком,
для роботи з меню окремо від сайту розкоментуй php скріпти у документі -->

<!-- <?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?> -->
