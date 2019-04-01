<?php
    session_start();
    if(isset($_SESSION['iduser'])){
        session_unset();
        session_destroy();
        header("Location: ../view/outindex.php");
        exit();
    }   
?>