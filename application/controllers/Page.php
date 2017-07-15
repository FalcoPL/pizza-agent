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

			// models
				$this -> load -> model('user_model');
				$this -> load -> model('product_model');
		}

		public function index()
		{ 
			$this->load->view('templates/header');
			$this->load->view('pages/index');
			$this->load->view('templates/footer');
		}

		public function view($page_name)
		{
			$data['pages'] = $this -> product_model -> get($page_name);

			$this->load->view('templates/header', $data);
			$this->load->view('pages/view', $data);
			$this->load->view('templates/footer', $data);
		}
	}