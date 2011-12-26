<?php

class PdoSingleton
{
	private static $instance = null;
	private $pdo = null;
	private function __construct($databaseName, $databaseHost, $databaseUsername, 
		$databasePassword)
	{
		$this->pdo = new PDO(sprintf('mysql:dbname=%s;host=%s;', 
			$databaseName, $databaseHost), $databaseUsername, $databasePassword);
	}
	public static function initialize($databaseName, $databaseHost, $databaseUsername, 
		$databasePassword)
	{
		if(self::$instance == null)
		{
			self::$instance = new PdoSingleton($databaseName, $databaseHost, $databaseUsername, 
				$databasePassword);
		}
	}
	public static function getInstance()
	{
		return self::$instance;
	}
	public function getPdo()
	{
		return $this->pdo;
	}
}

?>
