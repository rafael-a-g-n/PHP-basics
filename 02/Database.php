<?php
class Database {

	public $connection;
	public function __construct()
	{
		$dsn = "mysql:host=mysql-93a4f08-ragn-a06e.a.aivencloud.com;port=16579;dbname=phppractise;user=avnadmin;password=AVNS_QlSZgdut7W90ZkVGJG0;charset=utf8mb4";

		$this->connection = new PDO($dsn);
	}
	public function query($query)
	{
		$statement = $this->connection->prepare($query);
		$statement->execute();

		return $statement;
	}
}
