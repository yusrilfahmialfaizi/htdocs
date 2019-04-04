<?php 
	
	/**
	 * 
	 */
	class List_p extends CI_Controller
	{
		
		public function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('products_model');
			$this->load->helper('url');
			$this->load->library('form_validation');

		}
		public function index()
		{
			$data['products'] = $this->products_model->getAll();
			$this->load->view('admin/products/list', $data);
		}
	}
?>