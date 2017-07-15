<?php
	/**
	* 
	*/
	class product_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		public function get()
		{
			$query = $this -> db -> get('products');

			return $query -> result();
		}

		public function add_toCart($details)
		{
			$this -> user_model -> check_login();
			
			$product = explode('|::|', $details);

			$id		= $product[0];
			$price	= $product[1];
			$name	= $product[2];

			$data = array
							(
								'id'	=> $id,
								'qty'	=> 1,
								'price'	=> $price,
								'name'	=> $name,
							);

			$this -> cart -> insert($data);
		}
	}