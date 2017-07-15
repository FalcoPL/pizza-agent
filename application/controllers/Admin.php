<?php
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			// modules
				$this -> load -> database();
				$this -> load -> helper('url_helper');
				$this -> load -> library('session');
				$this -> load -> library('pagination');

			// models
				$this -> load -> model('user_model');
				$this -> load -> model('product_model');
				$this -> load -> model('admin_model');
		}

		public function view($page = 'home')
		{
			if (!file_exists(APPPATH.'views/admin/'.$page.'.php'))
			{
			        show_404();
			}
						
			$this->load->view('templates/header');
			$this->load->view('admin/'.$page);
			$this->load->view('templates/footer');
		}

		public function list_users($offset = 0)
		{
			// Here I'm going to add show users in list with pagination
		}
	}