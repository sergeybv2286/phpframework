<?php

namespace Ijdb\Controllers;

class Login {

	private $authentication;

	public function __construct(\Ninja\Authentication $authentication){
		$this->authentication = $authentication;
	}

	public function error(){
		return ['template' => 'loginerror.html.php', 'title' => 'You are not logged in'];
	}

	public function logginForm(){
		return ['template' => 'login.html.php', 'title' => 'Log in'];
	}

	public function processLogin(){
		if($this->authentication->login($_POST['email'], $_POST['password'])){
			header('Location: /login/success');
		} else {
			return ['template' => 'login.html.php', 
			      'title' => 'Log in',
			      'variables' => [
			      'error' => 'Invalid username/password'
			      ]
			  ];
		}
	}

	public function success(){
		return ['template' => 'loginsuccess.html.php', 'title' => 'You are logged in now'];
	} 
}