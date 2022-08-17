<?php
$servername = "localhost";
        $database = "pizzazher";
        $username = "root";
        $password = "";
        // Создаем соединение
        $connect = mysqli_connect($servername, $username, $password, $database);


        //$mysql->set_charset('utf8');
    
        // Проверяем соединение
        if (!$connect) {
            die('Error connect to database!');
        }

     
        ?>