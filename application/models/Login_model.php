<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login_model extends CI_Model {
	
		public function cek($where, $table) {
			$this->db->where($where);
			return $this->db->get($table);
		}
	
		public function create($table, $data) {
			return $this->db->insert($table, $data);
		}

	}
	
	/* End of file login_model.php */
	/* Location: ./application/models/login_model.php */


?>