<?php

    require_once '../mvc/app/models/dbConnection.php';

    class TripsGetter extends dbConnection{

        public function getAllTrips(){
            $trips = [];
            
            if($this->checkConnection() == 'db-failure'){
                return $trips;
            }

            $sql = "SELECT * FROM trips ;";
            $result = mysqli_query($this->getConnection() , $sql);
            
            while($row = mysqli_fetch_assoc($result)){
                array_push($trips, $row);
            }       
            $this->close();

            return $trips;

        }

        
    }

?>