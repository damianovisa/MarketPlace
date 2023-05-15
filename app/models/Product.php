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

	public function getBySeller($seller_id){
		$SQL = "SELECT * FROM product WHERE seller_id=:seller_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['seller_id' => $seller_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetchAll();
	}

	public function getByProduct($product_id)
    {
        $SQL = "SELECT * FROM product WHERE product_id=:product_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['product_id' => $product_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Product');
        return $STMT->fetch();
    }

	public function deleteProduct(){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['product_id'=>$this->product_id]);
	}

	// public function insertProductDetails(){
	// 	$SQL = "INSERT INTO productDetails(seller_id,name,manufacturer,description,price,image) VALUES (:seller_id,:name,:manufacturer,:description,:price,:image)";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['seller_id'=>$this->seller_id,'name'=>$this->name,'manufacturer'=>$this->manufacturer,'description'=>$this->description,'price'=>$this->price,'image'=>$this->image]);
	// }
	
}