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

    public function getSellerById($seller_id){
		$SQL = "SELECT * FROM seller WHERE seller_id=:seller_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$seller_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	public function getCommentBySeller($seller_id){
		$SQL = "SELECT * FROM comment WHERE seller_id=:seller_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['seller_id' => $seller_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
        return $STMT->fetchAll();
	}

	public function getSellerByProduct($product_id){
		$SQL = "SELECT seller_id FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$product_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Seller');
		return $STMT->fetch();
	}

	// public function getCommentByUserId($user_id){
	// 	$SQL = "SELECT * FROM comment inner join user on user.user_id=comment.user_id where user_id=:user_id";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['user_id'=>$user_id]);
	// 	$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
	// 	return $STMT->fetchAll();
	// }

    public function insertSeller(){
		$SQL = "INSERT INTO seller(email,fname,lname,password_hash) VALUES (:email,:fname,:lname,:password_hash)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'password_hash'=>$this->password_hash]);
	}

	public function updateSeller(){
		$SQL = "UPDATE seller set email=:email,fname=:fname,lname=:lname,profile_pic=:profile_pic where seller_id=:seller_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,'fname'=>$this->fname,'lname'=>$this->lname,'profile_pic'=>$this->profile_pic]);
	}



}