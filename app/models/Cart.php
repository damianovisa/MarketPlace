<?php 
namespace app\models;

class Cart extends \app\core\Model{

    public function getCartByUserId($user_id){
		$SQL = "SELECT * FROM cart inner join product on product.product_id=cart.product_id where user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['user_id'=>$user_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function getAll($cart_id){
        $SQL = "SELECT * FROM cart WHERE cart_id=:cart_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['cart_id'=>$cart_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Cart');
        return $STMT->fetchAll();
    }

	public function insertToCart(){
		$SQL = "INSERT INTO cart(product_id,user_id) VALUES (:product_id,:user_id)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id,'user_id'=>$this->user_id]);
	}

	public function delete($cart_id,$user_id){
		$SQL = "DELETE FROM cart WHERE cart_id=:cart_id and user_id=:user_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['cart_id'=>$cart_id, 'user_id'=>$user_id]);
	}

}