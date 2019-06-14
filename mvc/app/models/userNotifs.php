<?php

    class UserNotifs extends dbConnection{

        public function getMyNotifications($uid){
            
            $sql = "SELECT * FROM notifications WHERE iduser = '$uid' ;";
            $result = mysqli_query($this->getConnection() , $sql);
    
            $notifs = array();
            while($row = mysqli_fetch_assoc($result)){
                array_push($notifs, $row);
            }       
            $this->close();
            return $notifs;
        }
    }

?>