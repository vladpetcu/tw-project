<?php
    session_start();
    if(isset($_POST['login-but'])){
        include_once '../model/db-connection.php';
        include_once '../model/login-user.php';

        $uid = mysqli_real_escape_string($conn,$_POST['uid']);
        $pwd1 = mysqli_real_escape_string($conn,$_POST['pwd']);

        if( empty($uid) || empty($pwd1)){
            header("Location: ../view/404.php?empty-fields");
            exit();
        }
        else{
            $loginAnswer = verifyUid($uid, $pwd1);
            if($loginAnswer == false){
                header("Location: ../view/myaccount.php?login-error");
                exit();
            }
            else{
                $_SESSION['iduser'] = $loginAnswer['id'];
                $_SESSION['user'] = $loginAnswer['username'];
                $_SESSION['mail'] = $loginAnswer['email'];
                $v1=$_SESSION['iduser'];
                $v2=$_SESSION['user'];
                $v3=$_SESSION['mail'];
                header("Location: ../view/user-index.php?login=success");
                exit();
            }
        }
    }
    else{
        header("Location: ../view/myaccount.php?login-error");
        exit();
    }
    mysqli_close($conn);
?>