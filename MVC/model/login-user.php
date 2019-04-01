<?php
    function verifyUid($uid, $pwd1){
        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tripdb";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return false;
        }

        $sql = "SELECT * FROM users WHERE username = '$uid' or email = '$uid';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            mysqli_close($conn);
            return false;
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($pwd1, $row['password']);
                if($hashedPwdCheck == false){
                    mysqli_close($conn);
                    return false;
                }
                else if($hashedPwdCheck == true){
                    mysqli_close($conn);
                    return $row;
                }
            }
        }
        mysqli_close($conn);
        return false;
    }
?>