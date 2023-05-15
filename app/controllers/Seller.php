<?php
namespace app\controllers;

class Seller extends \app\core\Controller{
	public function login(){

		if(isset($_POST['action'])){
			$seller = new \app\models\Seller();
			$seller = $seller->getSeller($_POST['email']);
			if(password_verify($_POST['password'], $seller->password_hash)){
				$_SESSION['seller_id'] = $seller->seller_id;
				$_SESSION['email'] = $seller->email;
				$_SESSION['fname'] = $seller->fname;
				$_SESSION['lname'] = $seller->lname;
				header('location:/Main/index');
			}
			else{
				header('location:/Seller/login');
			}
		}else{
			$this->view('/Seller/login');
		}

	} 
    
    public function register(){
        if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['passwordConf']){
				$seller = new \app\models\Seller();
                $emailIsUsed = $seller->getSeller($_POST['email']);
				if(!$emailIsUsed){
					$seller->email = $_POST['email'];
					$seller->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$seller->fname = $_POST['fname'];
					$seller->lname = $_POST['lname'];
					$seller->insertSeller();
					header('location:/Seller/login');
				}else{
					header('location:/Seller/register');	
				}
			}else{
				header('location:/Seller/register');
			}
		}else{
			$this->view('Seller/register');
		}
    }

	public function addProduct(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();
			$product->seller_id = $_SESSION['seller_id'];
			$product->name = $_POST['name'];
			$product->manufacturer = $_POST['manufacturer'];
			$product->description = $_POST['description'];
			$product->price = $_POST['price'];
			$product->image =$_POST['image'];
			$_SESSION['product_id'] = $product->product_id;
			$product->insertProduct();
			header('location:/Seller/addProduct');
		}else{
			$this->view('Seller/addProduct');
		}
	}

	public function viewProducts(){
		$product = new \app\models\Product();
		$products = $product->getBySeller($_SESSION['seller_id']);

		$this->view('/Seller/viewProducts', $products);
	}

	public function deleteProduct($product_id){
		$product = new \app\models\Product();
		$product = $product->getByProduct($product_id);
		$product->product_id = $product_id;
		
		$product->deleteProduct();
		header('location:/Seller/viewProducts');
	}

	public function viewReviews(){
		$seller = new \app\models\Seller();
		$message = $seller->getCommentBySeller($_SESSION['seller_id']);
		
		$this->view('/Seller/viewreviews',$message);
	}
}