<?php
namespace app\controllers;

class User extends \app\core\Controller{
	public function login(){
		$this->view('/User/login');
	} 
    
    public function register(){
        $this->view('/User/register');
    }

}