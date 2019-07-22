<?php
class Database{

	private $host;
    private $user;
	private $db_name;
	private $pass;
    public  $conn;

    public function __construct(){
        $config = parse_ini_file('config.ini');
        $this->host     = $config['HOST_DB'];
        $this->user     = $config['USER_DB'];
        $this->db_name  = $config['NAME_DB'];
        $this->pass     = $config['PASS_DB'];
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

?>