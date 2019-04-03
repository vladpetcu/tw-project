<?php
    function getProfile($iduser){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tripdb";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return "undefined-user";
        }
        
        $sql = "SELECT username FROM users WHERE id = '$iduser';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($resultCheck < 1){
            mysqli_close($conn);
            return "undefined-user";
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                mysqli_close($conn);
                return $row['username'];
            }
            mysqli_close($conn);
        }
        mysqli_close($conn);
        return "undefined-user";
    }

    function getPicture($iduser){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tripdb";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return "default-user.jpg";
        }
        
        $sql = "SELECT * FROM profileimgs WHERE userid = '$iduser';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck < 1){
            mysqli_close($conn);
            return "default-user.jpg";
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                if( $row['status'] == 0){
                    mysqli_close($conn);
                    return "default-user.jpg";
                }
                else if( $row['status'] == 1){
                    return "p" . $iduser . "." . $row['extension'];
                    mysqli_close($conn);
                }
            }
            mysqli_close($conn);
        }
        mysqli_close($conn);
        return "default-user.jpg";
    }

    function updatePicStatus($id, $fileActualExt){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tripdb";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        
        $sql = "UPDATE profileimgs SET status=1, extension='$fileActualExt' WHERE userid = '$id';";
        $result = mysqli_query($conn, $sql);
       
        if($result != 1){
            echo "Failed to update picture status: " . mysqli_connect_error();
            mysqli_close($conn);
        }
        mysqli_close($conn);
    }
?>