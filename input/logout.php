<?php 
  require('../partials/header.php');
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != NULL){
    $_SESSION["user_id"] = NULL;
    header("Location: /");
  }




?>