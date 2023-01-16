<?php 
namespace app\models;

class Product extends \app\core\Model{

    public function getAllProducts(){
		$SQL = "SELECT * FROM product";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
		return $STMT->fetchAll();
	}

	public function insertProduct(){
		$SQL = "INSERT INTO product(seller_id,name,manufacturer,description,price,image) VALUES (:seller_id,:name,:manufacturer,:description,:price,:image)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['seller_id'=>$this->seller_id,'name'=>$this->name,'manufacturer'=>$this->manufacturer,'description'=>$this->description,'price'=>$this->price,'image'=>$this->image]);
	}

}