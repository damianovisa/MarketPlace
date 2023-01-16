<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllProducts();
		$this->view('/Main/index',$products);
	} 
}