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
	}