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

		public function get($type = false, $id = false)
		{
			$query = $this -> db -> get($type);

			return $query -> result();
		}

		public function add_toCart($details)
		{
			$this -> user_model -> check_login();
			
			$product = explode('|::|', $details);

			$id		= $product[0];
			$price	= $product[1];
			$name	= $product[2];
			$size	= $product[3];

			$data = array
						(
							'id'	=> $id,
							'qty'	=> 1,
							'price'	=> $price,
							'name'	=> $name,
							'size'	=> $size,
						);

			$this -> cart -> insert($data);

			redirect(site_url());
		}

		public function get_sizes()
		{
			$query = $this -> db -> get_where('sizes', array('size_ownerId' => 1));

			return $query -> result();
		}
	}