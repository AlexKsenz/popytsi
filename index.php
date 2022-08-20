<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header.php");
require($_SERVER['DOCUMENT_ROOT'] . "/partials/header-menu.php");
?>



<div class="wrapper">
    <section class="promo">

    </section>
</div>

<div class="wrapper">
    <section class="offers__piza">

        <div class="offers__title">
            <h3>ПІЦА</h3>
            <div class="underline"> </div>
        </div>
        

<?php

$catalogs = mysqli_query($connect, "SELECT catalogs.id, composition, category, price, amount_catalog, imagename FROM (catalogs JOIN category ON id_category = category.id) JOIN composition ON id_composition = composition.id;");

$catalogs = mysqli_fetch_all($catalogs);

foreach ($catalogs as $catalogs) {
    ?>
        <div class="offers__container">
            <div class="card">
                <div class="card__container">
                <img src="\assets\img\products\<?= $catalogs[5] ?>" >

                    <div class="card__description">
                        <h4 class="card__title"><?= $catalogs[1] ?></h4>
                        <p class="card__subtitle">Тісто, соус вершковий, сир моцарела, шинка, смажене куряче філе,
                            печериці, цибуля синя, помідори, рукола.</p>
                        <p class="card__weight">Вага:<?= $catalogs[4] ?> г</p>
                        <p class="card__price"><?= $catalogs[3] ?> грн</p>
                    </div>
                </div>

                <button class="add__cart">Додати у кошик</button>
            </div>
<?php
}
?>
          
        
    </section>
</div>


<?php
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer-site.php");
require($_SERVER['DOCUMENT_ROOT'] . "/partials/footer.php");
?>