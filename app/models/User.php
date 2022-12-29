<?php 
namespace app\models;

class User extends app\core\Model{

    public function getUser($email){
		$SQL = "SELECT * FROM user WHERE email=:email";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$email]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

    public function insertUser(){
		$SQL = "INSERT INTO user(email,fname,lname,password_hash,profile_pic) VALUES (:email,:fname,:lname,:password_hash,:profile_pic)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'password_hash'=>$this->password_hash,'profile_pic'=>$this->profile_pic]);
	}
}