<?php

    class Model{
        function startAppSession(){
            session_start();
            $_SESSION['iduser'] = -1;
            $_SESSION['user'] = "undefined_user";
            // if(header("Location: ../views/user-index.php"))
            //     header("Location: asd");
        }
    };

?>