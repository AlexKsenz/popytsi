<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header-menu.php");
?>



<section class="promo">
    <div class="container">

    </div>
</section>

<section class="offers" id="piza">
    <div class="container">
        <div class="title">
            <h3>ПІЦА</h3>
            <div class="underline"> </div>
        </div>

        <?php

        $catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename, comments FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id WHERE id_category = 3;");

        $catalogs = mysqli_fetch_all($catalogs);

        foreach ($catalogs as $catalogs) {
        ?>
        <div class="offers-container">
            <div class="card">
                <div class="card-container">
                <img src="\assets\img\products\<?= $catalogs[5] ?>" >

                    <div class="card-description">
                        <h4 class="card-title"><?= $catalogs[1] ?></h4>
                        <p class="card-subtitle"> <?=$catalogs[6] ?> </p>
                        <p class="card-weight">Вага:<?= $catalogs[4] ?> г</p>
                        <p class="card-price"><?= $catalogs[3] ?> грн</p>
                    </div>
                </div>

                <a href="?cart=add&id=<?= $catalogs[0] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $catalogs[0] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> замовити </a>
                <?php
        }
        ?>


        <!-- <?php

        $catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id ;");

        $catalogs = mysqli_fetch_all($catalogs);

        foreach ($catalogs as $catalogs) {
        ?>
            <div class="offers-container">
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title"><?= $catalogs[1] ?></h4>
                            <p class="card-subtitle">Тісто, соус вершковий, сир моцарела, шинка, смажене куряче філе,
                                печериці, цибуля синя, помідори, рукола.</p>
                            <p class="card-weight">Вага:<?= $catalogs[4] ?> г</p>
                            <p class="card-price"><?= $catalogs[3] ?> грн</p>
                        </div>
                    </div>
                    <img class="card-image" src="\assets\img\products\<?= $catalogs[5] ?>">

                    <button class="add-cart">Додати у кошик</button>
                </div>
            <?php
        }
            ?> -->


            </div>
    </div>
</section>

<section class="offers">
        <div class="container">

            <div class="title" id="salads">
                <h3>САЛАТИ</h3>
                <div class="underline"> </div>
            </div>

            <?php

        $catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename, comments FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id WHERE id_category = 3;");

        $catalogs = mysqli_fetch_all($catalogs);

        foreach ($catalogs as $catalogs) {
        ?>
        <div class="offers-container">
            <div class="card">
                <div class="card-container">
                <img src="\assets\img\products\<?= $catalogs[5] ?>" >

                    <div class="card-description">
                        <h4 class="card-title"><?= $catalogs[2] ?></h4>
                        <p class="card-subtitle"> <?=$catalogs[6] ?> </p>
                        <p class="card-weight">Вага:<?= $catalogs[4] ?> г</p>
                        <p class="card-price"><?= $catalogs[3] ?> грн</p>
                    </div>
                </div>

                <a href="?cart=add&id=<?= $catalogs[0] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $catalogs[0] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> замовити </a>
                <?php
        }
        ?>

            </div>

        </div>
    </section>

    <section class="offers" id="potables">
        <div class="container">
            <div class="title">
                <h3>НАПОЇ</h3>
                <div class="underline"> </div>
            </div>

            <?php

        $catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename, comments FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id WHERE id_category = 3;");

        $catalogs = mysqli_fetch_all($catalogs);

        foreach ($catalogs as $catalogs) {
        ?>
        <div class="offers-container">
            <div class="card">
                <div class="card-container">
                <img src="\assets\img\products\<?= $catalogs[5] ?>" >

                    <div class="card-description">
                        <h4 class="card-title"><?= $catalogs[3] ?></h4>
                        <p class="card-subtitle"> <?=$catalogs[6] ?> </p>
                        <p class="card-weight">Вага:<?= $catalogs[4] ?> г</p>
                        <p class="card-price"><?= $catalogs[3] ?> грн</p>
                    </div>
                </div>

                <a href="?cart=add&id=<?= $catalogs[0] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $catalogs[0] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> замовити </a>
                <?php
        }
        ?>

            <!-- <div class="offers-container">
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Яблучний сік</h4>
                            <p class="card-subtitle">Виробник: Rich.</p>
                            <p class="card-weight">Об’єм: 1000 мг</p>
                            <p class="card-price">65 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/drink_apple juice.png" alt="apple juice">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Вишневий нектар</h4>
                            <p class="card-subtitle">Виробник: Rich.</p>
                            <p class="card-weight">Об’єм: 1000 мг</p>
                            <p class="card-price">65 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/drink_cherry_nectar.png"
                        alt="cherry_nectar">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Апельсиновий нектар</h4>
                            <p class="card-subtitle">Виробник: Rich.</p>
                            <p class="card-weight">Об’єм: 1000 мг</p>
                            <p class="card-price">65 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/drink_orange_nectar.png"
                        alt="orange_nectar">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Персиковий нектар</h4>
                            <p class="card-subtitle">Виробник: Rich.</p>
                            <p class="card-weight">Об’єм: 1000 мг</p>
                            <p class="card-price">65 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/drink_peach_nectar.png"
                        alt="peach_nectar">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Coca-Cola</h4>
                            <p class="card-subtitle">Виробник: Coca-Cola.</p>
                            <p class="card-weight">Об’єм: 1000 мг</p>
                            <p class="card-price">65 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/drink_coca-cola.png" alt="coca-cola">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Томатний сік</h4>
                            <p class="card-subtitle">Виробник: Rich.</p>
                            <p class="card-weight">Об’єм: 1000 мг</p>
                            <p class="card-price">65 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/drink_tomato_juice.png"
                        alt="tomato_juice">
                    <button class="add-cart">Додати у кошик</button>
                </div> -->
            </div>
        </div>
    </section>

    <section class="offers" id="deserts">
        <div class="container">

            <div class="title">
                <h3>ДЕСЕРТИ</h3>
                <div class="underline"> </div>
            </div>

            <?php

        $catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename, comments FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id WHERE id_category = 3;");

        $catalogs = mysqli_fetch_all($catalogs);

        foreach ($catalogs as $catalogs) {
        ?>
        <div class="offers-container">
            <div class="card">
                <div class="card-container">
                <img src="\assets\img\products\<?= $catalogs[5] ?>" >

                    <div class="card-description">
                        <h4 class="card-title"><?= $catalogs[1] ?></h4>
                        <p class="card-subtitle"> <?=$catalogs[6] ?> </p>
                        <p class="card-weight">Вага:<?= $catalogs[4] ?> г</p>
                        <p class="card-price"><?= $catalogs[3] ?> грн</p>
                    </div>
                </div>

                <a href="?cart=add&id=<?= $catalogs[0] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $catalogs[0] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> замовити </a>
                <?php
        }
        ?>

            <!-- <div class="offers-container">
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Мафін кокосовий</h4>
                            <p class="card-subtitle"> Власне виробництво </p>
                            <p class="card-weight">Вага: 80 г</p>
                            <p class="card-price">60 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/dessert_muffin_coconut.jpeg"
                        alt="muffin_coconut">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Шоколадні роли</h4>
                            <p class="card-subtitle">Власне виробництво</p>
                            <p class="card-weight">Вага: 150 г</p>
                            <p class="card-price">110 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/dessert_chocolate_roles.jpg"
                        alt="chocolate_roles">
                    <button class="add-cart">Додати у кошик</button>
                </div>
                <div class="card">
                    <div class="card-container">
                        <div class="card-description">
                            <h4 class="card-title">Мафін лате з маршмелоу</h4>
                            <p class="card-subtitle">Власне виробництво</p>
                            <p class="card-weight">Вага: 80 г</p>
                            <p class="card-price">60 ₴</p>
                        </div>
                    </div>
                    <img class="card-image" src="/assets/img/products/dessert_muffin_latte.jpg"
                        alt="muffin_latte">
                    <button class="add-cart">Додати у кошик</button>
                </div> -->
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <div class="title">
                <h5>Про нашу піцу</h5>
                <div class="underline"> </div>
            </div>
            <div class="about-us-description">
                <div class="about-us-subtitle">
                    <p>Ми випікаємо справжню італійську піцу, і в цьому процесі ми не переслідували ідею якомога
                        дешевшого та вигідного для бізнесу способу випічки, ми запросили справжніх майстрів для побудови
                        печі по італійських, виточених та перевірених століттями, технологіях. <br></p>
                    <p> Піца на дровах має інший смак, сама ідея створення такого сервісу народилася в Італії, коли
                        вдалось відчути на смак справжню піцу, з того моменту ми йшли до своєї мети і ось ви маєте
                        можливість насолодитись справжньою італійською піцою прямо в себе вдома, на роботі чи просто
                        десь за прогулянкою по місту. <br> </p>
                    <p> Нам цікава Ваша думка та відгуки! Ми пропагуємо новий смак та нову філософію піци для нашого
                        міста. Ми гадаємо що піца має бути смачна, не дорога та завжди доступна в найкоротший строк, в
                        нашому випадку не пізніше 33 хвилин з моменту її замовлення. <br> </p>
                </div>
            </div>

        </div>
    </section>


<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer-site.php");
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?>
