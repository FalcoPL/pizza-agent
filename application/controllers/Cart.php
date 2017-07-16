<?php
	/**
	* 
	*/
	class Cart extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			// modules
				$this -> load -> database();
				$this -> load -> helper('url_helper');
				$this -> load -> library('session');
				$this -> load -> library('pagination');
				$this -> load -> library('cart');

			// models
				$this -> load -> model('user_model');
				$this -> load -> model('product_model');
				$this -> load -> model('admin_model');
				$this -> load -> model('alert_model');
				$this -> load -> model('cart_model');
		}

		public function index()
		{
		
			$this->load->view('templates/header');
			$this->load->view('cart/index');
			$this->load->view('templates/footer');
		}
	}