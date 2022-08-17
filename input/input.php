<?php 
  require('../partials/header.php');

    if($_SESSION['reg_ok']) {

   unset($_SESSION['reg_ok']);

   echo "<script>alert('Регистрация успешно пройдена!');</script>";
  
}
?>
<div class="zeroblock clearfix"></div>
<section id="content">
    <form action="#" method="POST">
        <h1>Вхід</h1>
        <div>
            <input type="email" placeholder="Ваш email" required="" id="username" name="email" />
        </div>
        <div>
            <input type="password" placeholder="Пароль" required="" id="password" name="password" />
        </div>



        <div>
            <input type="submit" value="Увійти" />
            
            <a href="register.php">Зареєструватися</a>
        </div>
    </form><!-- form --><div class="zeroblock clearfix"></div>
