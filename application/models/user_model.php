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
				$_SESSION['user']['login'] = $data['user_login'];

				$_SESSION['user']['id'] = $query -> result()[0] -> user_id;

				if ($query -> result()[0] -> user_role == 'admin') {
					redirect(site_url('admin/panel'));
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

		public function logout()
		{
			session_destroy();
			$_SESSION['user']['logged'] = false;
			$_SESSION = array();

			redirect(site_url());
		}

		public function register($data)
		{

			$query = $this -> db -> get_where('users', array('user_login' => $data['user_login']));
			unset($data['register']);

			if ($query -> num_rows() > 0) {
				$this -> alert_model -> alert('danger', 'Ten login jest zajęty!');
			}
			else
			{
				$this -> db -> insert('users', $data);

				$_SESSION['user']['logged'] = true;
				$_SESSION['user']['login'] = $data['login'];
				$_SESSION['user']['id'] = $this -> db -> insert_id();

				redirect(site_url('konto/moje'));
			}
		}

		public function get($id = false)
		{
			if ($id == false) {
					
			}
			else
			{
				$query = $this -> db -> get_where('users', array('user_id' => $id));

				return $query -> result();
			}
		}

		public function update($data)
		{
			$this -> user_model -> check_login();

			if ($data['user_pass'] !== '') {
				unset($data['save']);
				$this -> db -> update('users', $data);
			}
			else
			{
				$this -> alert_model -> alert('danger', 'Pole <b>hasło</b> nie może być puste!');
			}
		}
	}