<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Belajar2 extends CI_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->helper('html');
		}
		public function index(){
			// echo "ini index pada controller belajar";
			$this->load->view('view_belajar2');
		}
	}
?>