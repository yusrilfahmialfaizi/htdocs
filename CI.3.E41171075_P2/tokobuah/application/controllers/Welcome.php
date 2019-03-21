<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('download');
	}

	public function index(){
		$this->load->view('welcome');
	}
}