<?php 
	defined('BASEPATH')OR exit('NO direct script access allowed');

	/**
	 * 
	 */
	class Products extends CI_Controller
	{
		
		public function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('products_model');
			$this->load->helper('url');

		}
		public function index()
		{
			$data['products'] = $this->products_model->getAll();
			$this->load->view('admin/overview', $data);
		}
	}
?>