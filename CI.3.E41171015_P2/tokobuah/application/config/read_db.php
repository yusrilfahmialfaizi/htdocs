<?php 
	/**
	 * 
	 */
	class Read_db extends CI_Model
	{
		
		function ambil_data()
		{
			# code...
			return $this->db->get('user');
		}
	}
 ?>