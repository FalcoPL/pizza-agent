<?php
	/**
	* 
	*/
	class alert_model extends CI_Model
	{
		
		function __construct()
		{
			
		}

		public function alert($type, $content)
		{
			echo '<div class="alert alert-'.$type.'">'.$content.'</div>';
		}
	}