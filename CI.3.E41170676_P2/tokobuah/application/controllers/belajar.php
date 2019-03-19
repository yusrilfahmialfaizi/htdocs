<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class belajar extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->helper('html');
		}
		public function index(){
			echo "ini index pada controller belajar";
		}
		public function halo(){
			// echo "ini method halo pada controller belajar";
				$data = array(
					'judul' => "Cara Membuat View Pada CodeIgniter",
					'tutorial' => "CodeIgniter"
					 );
			$this->load->view('view_belajar', $data);
		}
	}
?>