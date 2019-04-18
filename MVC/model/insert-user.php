<?php
    function validateUid($uid){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tripdb";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            header("Location: ../view/404.php?empty-fields");
            exit();
        }

        $sql = "SELECT * FROM users WHERE username = '$uid';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        mysqli_close($conn);

        if($resultCheck > 0){
            return false;
        }
        return true;
    }

    function insertIntoDB($uid, $mail, $hashedPwd){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tripdb";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $sql = "INSERT INTO users (username, email, password ) VALUES ('$uid', '$mail', '$hashedPwd');";
        mysqli_query($conn , $sql);

        
        $sql = "SELECT * FROM users WHERE username = '$uid';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        
        if($row = mysqli_fetch_assoc($result)){
            $idUser = $row['id'];
            $sqlPic = "INSERT INTO profileimgs (userid, status, extension ) VALUES ('$idUser', 0, 'null' );";
            mysqli_query($conn , $sqlPic);
            mysqli_close($conn);
            return $row;
        }
    
        return "err";
    }


?>