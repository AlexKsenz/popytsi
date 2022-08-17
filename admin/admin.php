
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="/../css/admin.css">
    <!-- <link rel="stylesheet" type="text/css" href="/../css/style.css"> -->

</head>

<body>

    <div class="calc-head clearfix">
        <div class="logo"></div>


        <div class="hello">
            <?php

            if (isset($_SESSION["user_id"]) && ($_SESSION["user_id"] != null)){
                $sql = "SELECT * FROM users WHERE id =" . $_SESSION["user_id"];
                $result = mysqli_query($conn, $sql);
                $user = $result->fetch_assoc();
                
            }

            ?>

            <h4>Вітаю, <?php echo $user['username']; ?></h4>

            <form>
                <input type="button" onclick="window.location.href ='/';" value="Вийти" />
            </form>

        </div>
    </div>






</body>

</html>