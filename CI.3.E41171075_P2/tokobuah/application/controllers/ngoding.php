<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('msyafrianabie');
		$this->msyafrianabie->nama_saya();
                echo "<br/>";
                $this->msyafrianabie->nama_kamu("Ari");
	}

}