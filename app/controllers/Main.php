<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllProducts($_GET);
		$this->view('/Main/index',['products'=>$products]); 
	}

	public function profile(){
		$user = new \app\models\User();
		$seller = new \app\models\Seller();

		if(isset($_SESSION['user_id'])){
		$user = $user->getUserById($_SESSION['user_id']);
		}else if(isset($_SESSION['seller_id'])){
		$seller = $seller->getSellerById($_SESSION['seller_id']);
		}

		$this->view('/Main/profile',['user'=>$user,'seller'=>$seller]);
	}
	
	public function logout(){
		session_destroy();
		header('location:/User/login');
	}

	public function reviews($seller_id){
		$user = new \app\models\User();
		$seller = new \app\models\Seller();


		if(isset($_POST['action'])){			
			if(isset($_POST['message'])){
			
			$user->user_id = $_SESSION['user_id'];
			$user->message = $_POST['message'];
			$user->seller_id = $seller_id;
			$user->date = date("M D, y");

			$user->insertReview();
			}
		}
		$this->view('/Main/reviews');
	}

	public function productDetails($product_id){
		$product = new \app\models\Product();
		$products = $product->getByProduct($product_id);
		$this->view('/Main/productDetails',$products); 
	}
}