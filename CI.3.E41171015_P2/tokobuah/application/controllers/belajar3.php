<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Belajar3 extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('read_db');
		}

		function user()
		{
			$data['user'] = $this->read_db->ambil_data()->result();
			$this->load->view('v_user.php', $data);
		}
	}
?>