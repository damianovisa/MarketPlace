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
}