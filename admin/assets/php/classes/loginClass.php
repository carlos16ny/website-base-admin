<?php
namespace Classes;

/**
 * Class Login, realiza conexão com o banco de dados no seu construtor 
 * e gera uma conexão
 * @package Classes
 * @method __construnct()
 * @method checkEmail()
 * @method validateLogin()
 */

class Login {
    
    private $conn;

    public function __construct(){
        $db = new \Classes\Database;
        $this->conn = $db->connection();
    }

    /**
     * Verificação de email
     * @param Array $dados => { $email, $senha }
     * @return bool(false) || String $email
     */
    public function checkEmail($dados){
        $query = "SELECT `email` FROM `users` WHERE `password` = :senha AND `email` = :email;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($dados);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Verificação de email e senha
     * Verifica se a senha e email correspondem a uma mesma pessoa e retorna seus atributos para a $_SESSION
     * @param Array $dados => { $email, $senha }
     * @return bool(false) || Array ($id, $name, $email)
     */
    public function validateLogin($dados){
        $query = "SELECT `id`, `name`, `email` FROM `users` WHERE `password` = :senha AND `email` = :email;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($dados);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
