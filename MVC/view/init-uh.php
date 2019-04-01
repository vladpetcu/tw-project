<?php
    session_start();
    if(!isset($_SESSION['iduser'])){
      header("Location: ./myaccount.php");
      exit();
    }

    include_once '../model/db-connection.php';

?>