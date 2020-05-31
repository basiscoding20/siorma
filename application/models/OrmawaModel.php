<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class OrmawaModel extends CI_Model {
	
		function daftar_ormawa($query)
		{
			$this->db->select('*');			
			$this->db->from('ormawa');
			if ($query != '') {
		 		$this->db->or_like('nama_ormawa', $query);
		 		$this->db->or_like('sejarah', $query);
			}
			$this->db->order_by('nama_ormawa', 'asc');
			return $this->db->get();
		}	
	
	}
	
	/* End of file OrmawaModel.php */
	/* Location: ./application/models/OrmawaModel.php */
?>