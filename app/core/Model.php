<?php
namespace app\core;

class Model{
	protected static $_connection;

	public function __construct(){
		$server = 'localhost';
		$dbname = 'marketplace';
		$username = 'root';
		$password = '';

		try{
			self::$_connection = new \PDO("mysql:host=$server;dbname=$dbname",
											$username,$password);
			self::$_connection->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}catch(\Exception $e){
			echo "Failed connecting to the database";
			exit(0);
		}
	}

	public function isValid(){
		$reflection = new \ReflectionObject($this);
		$classProperties = $reflection->getProperties();
		foreach ($classProperties as $property) {
			$propertyAttributes = $property->getAttributes();
			foreach ($propertyAttributes as $attribute) {
				$test = $attribute->newInstance();
				if(!$test->isValidData($property->getValue($this))){
					return false;
				}
			}
		}
		return true;
	}

	public function __call($method, $arguments){
		if($this->isValid())
			call_user_func_array([$this, $method], $arguments);
	}
}