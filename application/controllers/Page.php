<?php
	/**
	* 
	*/
	class Page extends CI_Controller
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
				$this -> load -> model('page_model');
				$this -> load -> model('alert_model');
				$this -> load -> model('cart_model');
		}

		public function index()
		{ 
			$this->load->view('templates/header');
			$this->load->view('pages/index');
			$this->load->view('templates/footer');
		}

		public function view($page_name)
		{
			$data['page'] = $this -> page_model -> get($page_name);

			$this->load->view('templates/header', $data);
			$this->load->view('pages/view', $data);
			$this->load->view('templates/footer', $data);
		}
	}