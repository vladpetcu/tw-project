<?php
    class dbNews extends dbConnection{
        
        function getNewsFromDB(){
        
            $sql = "SELECT * FROM news ;";
            $result = mysqli_query($this->getConnection() , $sql);
    
            $news = array();
            while($row = mysqli_fetch_assoc($result)){
                array_push($news, $row);
            }       
            $this->close();
            return $news;
        }
        
    }

?>