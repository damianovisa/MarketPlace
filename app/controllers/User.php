<?php
namespace app\controllers;

class User extends \app\core\Controller{
	public function login(){
		$this->view('/User/login');
	} 
    
    public function register(){
        if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['passwordConf']){
				$user = new \app\models\User();//Error here
                $emailIsUsed = $user->getUser($_POST['email']);
				if(!$emailIsUsed){
					$user->email = $_POST['email'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->fname = $_POST['fname'];
					$user->lname = $_POST['lname'];
					// $user->insertUser();
					header('location:/Main/index');
				}else{
					header('location:/User/register');	
				}
			}else{
				header('location:/User/register');
			}
		}else{
			$this->view('User/register');
		}
    }

}