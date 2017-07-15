<?php
	/**
	* 
	*/
	class page_model extends CI_Model
	{
		
		function __construct()
		{
			$this -> load -> database();
		}

		public function get($page_name)
		{
			$query = $this -> db -> get_where('pages', array('page_name' => $page_name));

			return $query -> result();
		}
	}