<?php
    // session_start();
    if(isset($_POST["signup-but"])){
        include_once "../model/db-connection.php";
        include_once "../model/insert-user.php";

        $uid = mysqli_real_escape_string($conn,$_POST['uid']);
        $mail = mysqli_real_escape_string($conn,$_POST['mail']);
        $pwd1 = mysqli_real_escape_string($conn,$_POST['pwd']);
        $pwd2 = mysqli_real_escape_string($conn,$_POST['pwd-repeat']);

        if(empty($mail) || empty($uid) || empty($pwd1) || empty($pwd2)){
            header("Location: ../view/404.php?empty-fields");
            exit();
        }
        else{
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                header("Location: ../view/404.php?invalid-email");
                exit();
            }
            else{
                if(validateUid($uid) == false){
                    header("Location: ../view/myaccount.php?taken-uid");
                    exit();
                }
                else{
                    if($pwd1 != $pwd2){
                        header("Location: ../view/myaccount.php?different-password");
                        exit();
                    }
                    else{
                        $hashedPwd = password_hash($pwd1, PASSWORD_DEFAULT);
                        $insertAnswer = insertIntoDB($uid, $mail, $hashedPwd);
                        if($insertAnswer == "err"){
                            header("Location: ../view/myaccount.php?dbrow-error");
                            exit();    
                        }
                        else{
                            // $_SESSION['iduser'] = $insertAnswer['id'];
                            // $_SESSION['user'] = $insertAnswer['username'];
                            // $_SESSION['mail'] = $insertAnswer['email'];
                            header("Location: ../view/myaccount.php?signup=success");
                            exit();
                        }
                    }
                }
            }
        }
    }
    else{
        header("Location: ../view/myaccount.php?submit-error");
        exit();
    }
    mysqli_close($conn);
?>

