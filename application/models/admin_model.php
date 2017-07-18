<?php
	
	class admin_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}
		
		public function add_category($data)
		{
			$this -> db -> select_max('type_number');
			$this -> db -> where('type_ownerId', $_SESSION['user']['id']);
			$query= $this -> db -> get("types");

			if($query->row() != NULL){
				$id = $query -> row() -> type_number;
			}else{
				$id = 0;
			}
			
			foreach($data as $key => $value)
			{
				$data2 = array("type_name" => $value, "type_number" => ++$id,"type_ownerId" => $_SESSION['user']['id']);
				$query = $this -> db -> insert("types", $data2);
			}
		}
		
		public function show_types(){
			$query = $this -> db -> get_where('types', array('type_ownerId' => $_SESSION['user']['id']));
			return $query -> result();
		}
		
		public function show_products(){
			$query = $this -> db -> get_where('products', array('product_ownerId' => $_SESSION['user']['id']));
			return $query -> result();
		}
		
	}