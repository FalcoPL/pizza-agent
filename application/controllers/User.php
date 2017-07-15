<?php
	/**
	* 
	*/
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			// modules
				$this -> load -> database();
				$this -> load -> helper('url_helper');
				$this -> load -> library('session');

			// models
				$this -> load -> model('user_model');
				$this -> load -> model('product_model');
				$this -> load -> model('admin_model');
				$this -> load -> model('alert_model');
		}

		public function login()
		{
			$this -> load -> view('templates/header');
			$this -> load -> view('user/login');
			$this -> load -> view('templates/footer');
		}

		public function logout()
		{
			$this -> user_model -> logout();
		}

		public function register()
		{
			$this -> load -> view('templates/header');
			$this -> load -> view('user/register');
			$this -> load -> view('templates/footer');
		}

		public function view($page = 'account')
		{
			$data['user'] = $this -> user_model -> get($_SESSION['user']['id']);

			$this -> load -> view('templates/header');
			$this -> load -> view('user/templates/header');
			$this -> load -> view('user/'.$page, $data);
			$this -> load -> view('templates/footer');
		}
	}
?>