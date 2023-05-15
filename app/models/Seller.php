<?php 
namespace app\models;

class Seller extends \app\core\Model{

    public function getSeller($email){
		$SQL = "SELECT * FROM seller WHERE email=:email";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$email]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	public function getSellerId($seller_id){
		$SQL = "SELECT * FROM comment WHERE seller_id=:seller_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['seller_id' => $seller_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
        return $STMT->fetchAll();
	}

    public function insertSeller(){
		$SQL = "INSERT INTO seller(email,fname,lname,password_hash) VALUES (:email,:fname,:lname,:password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'password_hash'=>$this->password_hash]);
	}

}