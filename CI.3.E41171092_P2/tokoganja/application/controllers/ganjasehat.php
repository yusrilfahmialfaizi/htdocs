<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ganjasehat extends CI_Controller {
	
	function index(){
		$this->load->library('ganja');
		$this->ganja->nama_saya();
                echo "<br/>";
                $this->ganja->nama_kamu("nama saya adalah Ridi pengedar kelas kakap");
	}
 
}
