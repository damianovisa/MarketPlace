<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllProducts();
		$this->view('/Main/index',$products); 
	}
	
	public function logout(){
		session_destroy();
		header('location:/User/login');
	}

	public function reviews(){
		$this->view('/Main/reviews');
	}

	public function productDetails($product_id){
		$product = new \app\models\Product();
		$product->product_id = $product_id;
		$products = $product->getByProduct($product_id);
		$product->insertProductDetails();
		$this->view('/Main/productDetails',$products); 
	}
}