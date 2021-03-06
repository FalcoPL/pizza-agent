<?php
	/**
	* 
	*/
	class Product extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			// modules
				$this -> load -> database();
				$this -> load -> helper('url_helper');
				$this -> load -> library('session');
				$this -> load -> library('cart');

			// models
				$this -> load -> model('user_model');
				$this -> load -> model('product_model');
				$this -> load -> model('alert_model');
				$this -> load -> model('cart_model');
		}

		public function index()
		{ 
			$data['pizzas'] = $this -> product_model -> get('pizzas');

			$this->load->view('templates/header', $data);
			$this->load->view('product/index', $data);
			$this->load->view('templates/footer', $data);
		}

		public function view($id)
		{
			$data['products'] = $this -> product_model -> get(false, $id);

			$this->load->view('templates/header', $data);
			$this->load->view('product/view', $data);
			$this->load->view('templates/footer', $data);
		}
	}