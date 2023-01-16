<?php
namespace app\controllers;

class User extends \app\core\Controller{
	public function login(){

		if(isset($_POST['action'])){
			$user = new \app\models\User();
			$user = $user->getUser($_POST['email']);
			if(password_verify($_POST['password'], $user->password_hash)){
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['email'] = $user->email;
				$_SESSION['fname'] = $user->fname;
				$_SESSION['lname'] = $user->lname;
				header('location:/Main/index');
			}
			else{
				header('location:/User/login');
			}
		}else{
			$this->view('/User/login');
		}

	} 
    
    public function register(){
        if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['passwordConf']){
				$user = new \app\models\User();
                $emailIsUsed = $user->getUser($_POST['email']);
				if(!$emailIsUsed){
					$user->email = $_POST['email'];
					$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$user->fname = $_POST['fname'];
					$user->lname = $_POST['lname'];
					$user->insertUser();
					header('location:/User/login');
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