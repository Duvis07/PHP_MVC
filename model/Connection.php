<?php

    class Connection {
        // atributos
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $db_name = "store";
        private $conn;

        public function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);   
            if($this->conn->connect_error) {
                die("Error connection: ".$this->conn->connect_error);
            }
        }

        public function query($sql) {
           return $this->conn->query($sql);
        }

        public function close() {
            $this->conn->close();
        }
    }
?>