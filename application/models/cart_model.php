<?php
	/**
	* 
	*/
	class cart_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		public function final_price()
		{
			$val = 0;

			if (count(@$this->cart->contents()) !== 0) {
				foreach ($this->cart->contents() as $key => $item) {;
					$val += $item['subtotal'];
				}
			}

			return $val;
		}
	}