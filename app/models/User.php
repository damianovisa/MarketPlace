<?php 
namespace app\models;

class User extends \app\core\Model{

    public function getUser($email){
		$SQL = "SELECT * FROM user WHERE email=:email";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$email]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

    public function insertUser(){
		$SQL = "INSERT INTO user(email,fname,lname,password_hash) VALUES (:email,:fname,:lname,:password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'password_hash'=>$this->password_hash]);
	}
}