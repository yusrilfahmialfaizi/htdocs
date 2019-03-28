<?php 
	
	/**
	 * 
	 */
	class M_data extends CI_Model
	{
		
		function tampil_data()
		{
			# code...
			return $this->db->get('user');
		}
		function input_data($data,$table)
		{
			$this->db->insert($table,$data);
		}
		function hapus_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
		function edit()
		{
			$where = array('id' => $id );
			$data['user'] = $this->m_data->edit_data($where,'user')->result();
			$this->load->view('v_edit',$data);
		}
		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}
		function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}	
	}
?>