<?php

namespace Classes;
use \PDO;
/**
 * Classe que realiza a conexão com o banco de dados
 * Utiliza do arquivo config.ini para estabelecer as configurações corretas
 * @method connection()
 */

class Database
{

    private $host;
    private $user;
    private $db_name;
    private $pass;
    private $port;
    protected $conn;

    public function __construct()
    {
        if(ENV == 'DEV'){
            $this->host     = HOST_DB;
            $this->user     = USER_DB;
            $this->db_name  = NAME_DB;
            $this->pass     = PASS_DB;
            $this->port     = PORT_DB;
        }else{
            $this->host     = HOST_DB_PROD;
            $this->user     = USER_DB_PROD;
            $this->db_name  = NAME_DB_PROD;
            $this->pass     = PASS_DB_PROD;
            $this->port     = PORT_DB_PROD;
        }
    }

    /**
     * Função que recura conexão com o banco de dados
     * @return PDO::Connection
     * @throws PDOException
     */

    public function connection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host .  ";dbname=" . $this->db_name  , $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
