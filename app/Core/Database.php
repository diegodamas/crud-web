<?php 

class Sql {

	private $hostname = DB_HOST;
	private $username = DB_USER;
	private $password = DB_PASS;
	private $dbname = DB_NAME;

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".$this->dbname.";host=".$this->hostname, 
			$this->username,
			$this->password
		);

	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($statement, $key, $value);

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()) //? Insert sem retorno
	{
		$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

    }
    
    public function queryId($rawQuery, $params = array()) //? Insert com retorno
    {
		$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

        $stmt->execute();
        
        return $this->conn->lastInsertId();
    }

	public function select($rawQuery, $params = array()):array //? Query com retorno (Select)
	{
		$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_OBJ); //backup: FETCH_ASSOC

    }

    public function beginTransaction(){ //? Inicia transa��o
        return $this->conn->beginTransaction();
    }

    public function commit(){ //* Transa��o feita com sucesso

        return $this->conn->commit();
    }

    public function rollBack(){ //! Insert sem retorno
 
        return $this->conn->rollBack();
	}

}