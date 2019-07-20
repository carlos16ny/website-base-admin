<?php

    class Login {
        
        private $conn;

        public function __construct(){
           $db = new Database();
           $this->conn = $db->connection();
        }

        public function validateLogin($dados){
            $query = "SELECT * IF EXIST ";
        }
    }

?>