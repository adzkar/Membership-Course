<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Member_model extends CI_Model {
	
		public function baca_data($table) {
			$data;
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				foreach ($query->result_array() as $row) {
					$data[] = $row;
				}
				$query->free_result();
			} else {
				$data = NULL;
			}

			return $data;
		}

		public function nama() {
			$query = "SELECT member.nama, upgrade.id_member FROM member INNER JOIN upgrade ON member.id=upgrade.id_member";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function view_join($select, $from, $join, $sama) {
			$data = NULL;
			$this->db->select($select);
			$this->db->from($from);
			$this->db->join($join, $sama);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				$data = $query->result_array();
			} 
			return $data;
		}

		public function lihat_konten($link) {
			$query = "select * from content INNER JOIN author ON content.id_mentor=author.id_mentor where content.link='$link'";
			$data = $this->db->query($query);
			return $data->result_array();
		}

		public function create($table, $data) {
			return $this->db->insert($table, $data);
		}

		public function create2($table, $data) {
			$this->db->set($data);
			return $this->db->insert($table, $data);
		}

		public function hapus($table, $where) {
			return $this->db->delete($table, $where);
		}

		public function update_data($table, $where, $data_baru) {
			$this->db->where($where);
			return $this->db->update($table, $data_baru);
		}

		public function view_id($data, $table) {
			$data;
			$this->db->where($data);
			$query = $this->db->get($table);
			if ($query->num_rows() > 0) {
				foreach ($query->result_array() as $row) {
					$data[] = $row;
				}
				$query->free_result();
			} else {
				$data = NULL;
			}

			return $data;
		}
	
	}
	
	/* End of file Member_model.php */
	/* Location: ./application/models/Member_model.php */
?>
