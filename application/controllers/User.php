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

			if ($this -> input -> post('user_name') !== '' && $this -> input -> post('user_pass')) {
				$data['response'] = $this -> user_model -> login($this -> input -> post);
			}
			else
			{
				$data['response'] = '';
			}

			$this -> load -> view('templates/header');
			$this -> load -> view('user/login', $data);
			$this -> load -> view('templates/footer');
		}

		public function logout()
		{
			$this -> user_model -> logout();
		}

		public function register()
		{
			if ($this -> input -> post('user_name') !== '' && $this -> input -> post('user_pass')) {
				$data['response'] = $this -> user_model -> login($this -> input -> post);
			}
			else
			{
				$data['response'] = '';
			}

			$this -> load -> view('templates/header');
			$this -> load -> view('user/register', $data);
			$this -> load -> view('templates/footer');
		}

		public function view($page = 'account')
		{
			$this -> load -> view('templates/header');
			$this -> load -> view('user/templates/header');
			$this -> load -> view('user/'.$page, $data);
			$this -> load -> view('templates/footer');
		}
	}
?>