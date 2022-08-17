<?php 
  require('../partials/header.php');

  if(!empty($_POST)){
    echo $_POST['username'] . " - " . " - " . $_POST['phone'];

            $sql = "INSERT INTO `users` (`username`, `email`, `password`, `phone`) VALUES ('" . $_POST['username'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['phone'] . "');";

        if (mysqli_query($conn  , $sql)) {
            
            header("Location: /");

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>









<div class="zeroblock clearfix"></div>
<section id="content">
    <form action="#" method="POST">
        <h1>Реєстрація</h1>
        <div>
            <input type="username" placeholder="Ваше ім’я" required="" id="username" name="username" />
        </div>
        <div>
            <input type="phone" placeholder="phone" required="" id="phone" name="phone" />
        </div>

        <div>
            <input type="email" placeholder="Ваш email" required="" id="email" name="email" />
        </div>
        <div>
            <input type="password" placeholder="Пароль" required="" id="password" name="password" />
        </div>



  
        <div class="big">
            <input type="submit" value="Зареєструватися" />

        </div>
    </form>
</section>


<?php 

    
  require('../partials/footer.php');
?>