<?php
    session_start();
    if(isset($_SESSION['iduser'])){
        session_unset();
        session_destroy();
        sleep(1);
        header("Location: ../view/outindex.php");
        exit();
    }   
?>