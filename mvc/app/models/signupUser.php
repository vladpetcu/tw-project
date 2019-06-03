<?php
    class signupUser extends dbConnection{

        public function validateUid($uid){
            $sql = "SELECT * FROM users WHERE username = '$uid';";
            $result = mysqli_query($this->getConnection(), $sql);
            $resultCheck = mysqli_num_rows($result);
            $this->close();
    
            if($resultCheck > 0){
                return false;
            }
            return true;
        }
    
        public function insertIntoDB($uid, $mail, $hashedPwd){
    
            $sql = "INSERT INTO users (username, email, password ) VALUES ('$uid', '$mail', '$hashedPwd');";
            mysqli_query($this->getConnection() , $sql);
    
            
            $sql = "SELECT * FROM users WHERE username = '$uid';";
            $result = mysqli_query($this->getConnection(), $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if($row = mysqli_fetch_assoc($result)){
                $idUser = $row['id'];
                $sqlPic = "INSERT INTO profileimgs (userid, status, extension ) VALUES ('$idUser', 0, 'null' );";
                mysqli_query($this->getConnection(), $sqlPic);
                $this->close();
                return $row;
            }
        
            return "err";
        }
    }


?>