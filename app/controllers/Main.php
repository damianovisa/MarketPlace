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
		$product = new \app\models\Product();
		
		if(isset($_SESSION['user_id'])){
		$user = $user->getUserById($_SESSION['user_id']);
		}else if(isset($_SESSION['seller_id'])){
		$product = $product->getBySeller($_SESSION['seller_id']);
		$seller = $seller->getSellerById($_SESSION['seller_id']);
		}

		if(isset($_POST['action'])){
			if(isset($_SESSION['user_id'])){
				$user->user_id = $_SESSION['user_id'];
				$user->fname = $_POST['fname'];
				$user->lname = $_POST['lname'];
				$user->email = $_POST['email'];
				$user->address = $_POST['address'];
				$user->profile_pic = $_POST['profile_pic'];

				$user->updateUser();
			}else if(isset($_SESSION['seller_id'])){
				$seller->seller_id = $_SESSION['seller_id'];
				$seller->fname = $_POST['fname'];
				$seller->lname = $_POST['lname'];
				$seller->email = $_POST['email'];
				$seller->profile_pic = $_POST['profile_pic'];	

				$seller->updateSeller();
			}
		}

		$this->view('/Main/profile',['user'=>$user,'seller'=>$seller,'product'=>$product]);
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