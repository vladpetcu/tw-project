<?php

    require_once '../mvc/app/models/dbConnection.php';

    class NotifInserter extends dbConnection{

        public function insertNotif($idUserVal, $tripNameVal, $cityFromVal, $cityToVal, $priceVal, $flightVal){
            if($this->checkConnection() == 'db-failure'){
                return $trips;
            }

            $sql = "SELECT * FROM notifications WHERE iduser = '$idUserVal' AND tripname = '$tripNameVal' AND fromcity = '$cityFromVal'
                AND tocity = '$cityToVal';";
            $result = mysqli_query($this->getConnection(), $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                $this->close();
                // return 'not-ok';
            }
            else{
                $sql = "INSERT INTO notifications (iduser, tripname, fromcity, tocity, price, flight)
                    VALUES ('$idUserVal', '$tripNameVal', '$cityFromVal', '$cityToVal', '$priceVal', '$flightVal');";
                if(mysqli_query($this->getConnection(), $sql)){
                    $this->close();
                    // return 'ok';
                }
            }
        }

        
    }

?>