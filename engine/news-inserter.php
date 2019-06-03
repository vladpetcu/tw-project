<?php
    require_once '../mvc/app/models/dbConnection.php';

    class NewsInserter extends dbConnection{
        
        public function clearNewsTable(){
            if($this->checkConnection() == 'db-failure'){
                return 'failed';
            }
            $sql = "TRUNCATE TABLE news";
            mysqli_query($this->getConnection(), $sql);
            $this->close();
            return 'ok';
        }

        public function insertNewsData($price, $country, $city, $dist, $dur, $layover, $iurl){
            if($this->checkConnection() == 'db-failure'){
                return 'failed';
            }

            $sql = "INSERT INTO news (price, country, city, distance, duration, layover, imgurl)
                VALUES ('$price', '$country', '$city', '$dist', '$dur', '$layover', '$iurl');";
            mysqli_query($this->getConnection(), $sql);
            $this->close();
            return 'ok';
        }
    }
?>