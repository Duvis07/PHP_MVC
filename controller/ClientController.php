<?php
    
    require('./model/Client.php');
    require('./model/Connection.php');

    class ClientController {

        private Connection $conn;
        private Client $client;

        public function __construct() {
            $this->conn = new Connection;
        }
        
        public function get_cliente() {
            $clients = array();
            $sql = "SELECT * FROM clients";
            $result = $this->conn->query($sql);
            while($record = $result->fetch_assoc()) {
                $clients[] = $record;
            }
            return $clients;
        }

        public function save_client(Client $client) {

        }
    }


?>