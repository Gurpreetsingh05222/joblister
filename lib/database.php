<?php 
class Database{
	private $host = DB_HOST;
	private $user = D_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;
	private $dbh;
	private $error;
	private $stmt;

	public function__construct(){
		$dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname;

		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}

	public function query($query){
		$this->smt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
				
			}
		}
	}
}