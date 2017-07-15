<?php
	/**
	* 
	*/
	class user_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		public function check_login()
		{
			if (!isset($_SESSION) || !$_SESSION['user']['logged'] == true) {
				redirect(site_url('zaloguj'));
			}
		}

		public function login($data)
		{
			$query = $this -> db -> get_where('users', array('user_login' => $data['user_login'], 'user_pass' => $data['user_pass']));

			if ($query -> num_rows() > 0) {
				$_SESSION['user']['logged'] = true;
				$_SESSION['user']['name'] = $data['user_login'];
				echo '<pre>';
					print_r($query -> result());
				echo '</pre>';
				if ($query -> result()[0] -> user_role == 'admin') {
					redirect(site_url('admin'));
				}
				elseif ($query -> result()[0] -> user_role == 'staff') {
					redirect(site_url('obsluga'));
				}
				else
				{
					redirect(site_url('konto/moje'));
				}
			}
			else
			{
				$this -> alert_model -> alert('danger', 'Podane przez Ciebie dane są błędne!');
			}
		}
	}