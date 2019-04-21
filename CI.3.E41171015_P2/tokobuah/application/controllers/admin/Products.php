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
			$this->load->library('form_validation');
			$this->load->helper('url');

		}
		public function index()
		{
			$data['products'] = $this->products_model->getAll();
			$this->load->view('admin/products/list', $data);
		}
		public function add()
		{
			$product = $this->products_model;
			$validation = $this->form_validation;
			$validation->set_rules($product->rules());

			if ($validation->run()) {
				# code...
				$product->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
			}
			$this->load->view('admin/products/new_form');
		}
		public function edit($id = null)
		{
			if (!isset($id)) redirect('admin/products');
				# code...
				$product = $this->products_model;
				$validation = $this->form_validation;
				$validation->set_rules($product->rules());
				
				if ($validation->run()) {
					# code...
					$product->update();
					$this->session->set_flashdata('success','Berhasil disimpan');
				}
				$data['product'] = $product->getById($id);
				if (!$data['product']) show_404();
				$this->load->view('admin/products/new_edit', $data);			
		}
		public function delete($id=null)
		{
			if (!isset($id)) show_404();
			if ($this->products_model->delete($id)) {
				# code...
				redirect(site_url('admin/products'));
			}
		}
	}
?>