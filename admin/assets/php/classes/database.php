<?php

require("../../../../vendor/autoload.php");

class Database{

	private $host;
    private $user;
	private $db_name;
	private $pass;
    public  $conn;

    public function __construct(){
        $dotenv = Dotenv\Dotenv::create("../../../../");
        $dotenv->load();
        $this->host     = getenv('HOST_DB');
        $this->user     = getenv('USER_DB');
        $this->db_name  = getenv('NAME_DB');
        $this->pass     = getenv('PASS_DB');
    }

	public function connection(){

		$this->conn = null;

		try {
            $this->conn = new PDO("mysql:host=" . $this->host .  ";dbname=" . $this->db_name, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }


}


$bd = new Database();
$conn = $bd->connection();
$stmt = $conn->prepare('SELECT * FROM filme');
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_OBJ));
?>