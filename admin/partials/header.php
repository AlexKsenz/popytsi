<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');

  if(!isset($_SESSION)) {
      session_start();
  }

  $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;      //true/false
  
  if($is_session) {
    $userID = $_SESSION["user_id"];
    $sql = "SELECT * FROM `users` WHERE id=" . $userID;

    $result = mysqli_query($connect, $sql);
    $user = $result->fetch_assoc();

    if($user['role'] != "admin") {
    header("Location: /");
    }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Custom fonts for this template-->
    <link href="/admin/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
    <!-- Custom styles for this template-->
    <!-- <link href="/admin/assets/css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="/admin/assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Це попередні стилі-->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->

</head>

<body id="page-top">