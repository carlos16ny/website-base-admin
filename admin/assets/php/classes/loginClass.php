<?php

    class Login {
        
        private $conn;

        public function __construct(){
           $db = new Database();
           $this->conn = $db->connection();
        }

        public function checkEmail($dados){
            $query = "SELECT `email` FROM `users` WHERE `password` = :senha AND `email` = :email;";
            $stmt = $this->conn->prepare($query);
            $stmt->execute($dados);
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function validateLogin($dados){
            $query = "SELECT `id`, `name`, `email` FROM `users` WHERE `password` = :senha AND `email` = :email;";
            $stmt = $this->conn->prepare($query);
            $stmt->execute($dados);
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
    }

?>