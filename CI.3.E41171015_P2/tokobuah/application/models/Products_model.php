<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Products_model extends CI_Model
	{
		private $_table = "products";

		public $products_id;
		public $name;
		public $price;
		public $image = "default.jpg";
		public $description;
		
		//
		public function rules()
		{
			# code...
			return[
				['field' => 'name',
				'label' => 'Name',
				'rules' => 'required'],
				['field' => 'price',
				'label' => 'Price',
				'rules' => 'numeric'],
				['field'=> 'description',
				'label' => 'Description',
				'rules' => 'required']
			];
		}

		//menampilkan database
		public function getAll()
		{
			return $this->db->get($this->_table)->result();
			//SELECT * FROM products;

		}
		public function getById($id)
		{
			return $this->db->get_where($this->_table,["products_id"=> $id])->row();	
			// SELECT * FROM products WHERE products_id = $id
		}
		// CREATE / mengisikan data
		public function save()
		{
			$post = $this->input->post();
			$this->products_id = uniqid();
			$this->name = $post["name"];
			$this->price = $post["price"];
			$this->description = $post["description"];

			$this->db->insert($this->_table, $this);
			// INSERT ..... INTO ...... Values
		}
		// UPDATE
		public function update()
		{
			$post = $this->input->post();
			$this->products_id = $post['id'];
			$this->name = $post["name"];
			$this->price = $post["price"];
			$this->description = $post["description"];

			$this->db->update($this->_table, $this, array('products_id' => $post['id'] ));
			// UPDATE ...... FROM ..... 
		}
		// DELETE
		public function delete($id)
		{
			return $this->db->delete($this->_table, array('products_id' =>$id));
			// DELETE.....FROM ....
		}
	}
?>