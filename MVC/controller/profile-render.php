<?php
    function getUserName(){
        if(isset($_SESSION["iduser"])){
            include_once '../model/db-connection.php';
            include_once '../model/get-set-profile.php';
    
            $v = $_SESSION["iduser"];
            $username = getProfile($v);
            return $username;
        }
        return "undefined-user";
    }

    function getUserPic(){
        if(isset($_SESSION["iduser"])){
            include_once '../model/db-connection.php';
            include_once '../model/get-set-profile.php';
    
            $v = $_SESSION["iduser"];
            $picture = getPicture($v);
            return $picture;
        }
        return "default-user.jpg";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
        include_once '../model/db-connection.php';
        include_once '../model/get-set-profile.php';
        $id = $_SESSION["iduser"];
        $file = $_FILES["profile-pic"];
        $fileName = $_FILES["profile-pic"]['name'];
        $fileTmpName = $_FILES["profile-pic"]['tmp_name'];
        $fileSize = $_FILES["profile-pic"]['size'];
        $fileError = $_FILES["profile-pic"]['error'];
        $fileType = $_FILES["profile-pic"]['type'];        

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    $fileNameNew = "p" . $id . "." . $fileActualExt;
                    $fileDestination = '../../images/profiles/' . $fileNameNew;
                    if(move_uploaded_file($fileTmpName, $fileDestination)){
                        updatePicStatus($id, $fileActualExt);
                        header("Location: ../view/user-index.php?upload-success");
                        exit();
                    }
                    else{
                        header("Location: ../view/user-index.php?move-error");
                        exit();                        
                    }
                }
                else{
                    header("Location: ../view/user-index.php?profile-file-tobig");
                    exit();    
                }
            }
            else{
                header("Location: ../view/user-index.php?profile-file-error");
                exit();    
            }
        }
        else{
            header("Location: ../view/user-index.php?invalid-profile-file");
            exit();
        }
    }
?>