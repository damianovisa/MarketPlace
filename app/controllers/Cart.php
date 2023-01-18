<?php 
namespace app\controllers;

class Cart extends app\core\Controller{

    public function cart(){
		$item = new \app\models\Product();
		$items = $item->getAllProducts();
		$this->view('/Cart/cart',$items);
	}

    public function addToCart($product_id){
		$cart = new app\models\Cart();
		
		$cart->product_id = $product_id;
		$cart->user_id = $_SESSION['user_id'];
		$cart->insertToCart();

		header('location:/Main/index');
	}

}