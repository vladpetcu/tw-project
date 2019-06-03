<?php
    class loginUser extends dbConnection{
        
        public function verifyUid($uid, $pwd1){
            
            $sql = "SELECT * FROM users WHERE username = '$uid' or email = '$uid';";
            $result = mysqli_query($this->getConnection(), $sql);
            $resultCheck = mysqli_num_rows($result);
    
            if($resultCheck < 1){
                $this->close();
                return false;
            }
            else{
                if($row = mysqli_fetch_assoc($result)){
                    $hashedPwdCheck = password_verify($pwd1, $row['password']);
                    if($hashedPwdCheck == false){
                        $this->close();
                        return false;
                    }
                    else if($hashedPwdCheck == true){
                        $this->close();
                        return $row;
                    }
                }
            }
            $this->close();
            return false;
        }
        
    }


?>