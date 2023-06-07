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
    
	public function getUserById($user_id){
		$SQL = "SELECT * FROM user WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

    public function insertUser(){
		$SQL = "INSERT INTO user(email,fname,lname,password_hash) VALUES (:email,:fname,:lname,:password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'password_hash'=>$this->password_hash]);
	}

    public function insertReview(){
		$SQL = "INSERT INTO comment(user_id,seller_id,message,date) VALUES (:user_id,:seller_id,:message,:date)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,'seller_id'=>$this->seller_id,'message'=>$this->message,'date'=>$this->date]);
	}

	public function updateUser(){
		$SQL = "UPDATE user SET email=:email,fname=:fname,lname=:lname,address=:address,profile_pic=:profile_pic WHERE user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,'email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'address'=>$this->address,'profile_pic'=>$this->profile_pic]);
	}

}