<?php

class Database {

	private $conn;
	private $host;
	private $user;
	private $password;
	private $db_name;

	function __construct($h, $u, $p, $n) {
		$host = $h;
		$user = $u;
		$password = $p;
		$db_name = $n;
	}

	public function connect() {
		if (!$this -> $con) {
			$myConn = @mysqli_connect($this->$host, $this->$user, $this->$password);
			if ($myConn) {
				$selectDb = @mysqli_select_db($this->$name, $myConn);
				if ($selectDb) {
					$this->$con = true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function disonnect() {

	}

	public function getRow($query) {

	}

	public function insert($table, $values) { 

		$insert = "INSERT INTO" . $table . "VALUES (";

		foreach ($values as $value) {
			$insert = $insert + " \'$value\' ," ;
		}

		$insert = ")";

		$ins = @mysqli_query($insert);

		

	}

}

?>