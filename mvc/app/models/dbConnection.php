<?php
    error_reporting(E_ERROR | E_PARSE);

    class dbConnection{
        private $dbServername = "localhost";
        private $dbUsername = "root";
        private $dbPassword = "";
        private $dbName = "tripdb";
        private $conn;

        public function checkConnection(){
            $this->conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);

            if (mysqli_connect_errno()){
                return 'db-failure';
            }
            return 'db-success';
        }
        public function getConnection(){
            $this->conn = mysqli_connect($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);
            return $this->conn;
        }

        public function close(){
            mysqli_close($this->conn);
        }



    }
?>