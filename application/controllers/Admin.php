<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_Controller {
	
		private $tabel = "admin";
		private $tabel_member = "member";
		private $tabel_upgrade = "upgrade";
		private $tabel_post = "content";
		private $tabel_mentor = "author";

		private	$data_login = array('status_masuk' => 'ya');

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Login_model');
			$this->load->model('Member_model');
			$this->load->library('Cek_login');
		}

		public function index()
		{
			if ($this->session->userdata('status_masuk') == 'ya') {
				redirect('admin/dashboard');
			} else {
				$notifikasi = NULL;
				$login_view = NULL;
				$input = $this->input->post();
				if (isset($input['tombol'])) {
					$data_cek = array(
							'username' => $input['username'],
							'password' => md5($input['pass'])
						);
					$cek = $this->Login_model->cek($data_cek,$this->tabel);
					if ($cek->num_rows() == 1) {
						$buat_sesi = array(
									'status_masuk' => 'ya', 
								);
						$this->session->set_userdata($buat_sesi);
						redirect('admin/dashboard');
					} else {
						$notifikasi = 1;
					}
					$login_view = array(
									'notifikasi' => $notifikasi);
				}
				$this->load->view('admin/login', $login_view);
			}
		}
	
		public function dashboard() {
			// $this->data_login = array('status_masuk' => 'ya');
			$page = $this->uri->segment(3);
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');

			// untuk edit post
			$view_id = NULL;
			if ($page == 'edit_post') {
				$id_content = $this->uri->segment(4);
				$where = array('id_content' => $id_content);
				$view_id = $this->Member_model->view_id($where, $this->tabel_post);
			}

			// untuk lihta data edit mentor
			$view_mentor = NULL;
			if ($page == 'edit_mentor') {
				$id_content = $this->uri->segment(4);
				$where = array('id_mentor' => $id_content);
				$view_mentor = $this->Member_model->view_id($where, $this->tabel_mentor);	
			}

			// update post
			$update_data = $this->input->post();
			if (($page == 'edit_post') && isset($update_data['tombol'])) {
				// print_r($update_data);
				$data_baru = array(
									'judul' => $update_data['judul'],
									'id_mentor' => $update_data['id_mentor'],
									'kategori' => $update_data['kategori'],
									'status' => $update_data['status'],
									'link' => url_title($update_data['judul'], '-', TRUE),
									'content' => $update_data['content'],
									'date' => date('Y-m-d H:i:s')
								);
				$where = array('id_content' => $update_data['id_content']);
				$update = $this->Member_model->update_data($this->tabel_post, $where, $data_baru);
				redirect($this->uri->uri_string());
			}

			// untuk melihat upgrade bagian nama
			$nama = NULL;
			if ($page == 'upgrade') {
				$data_upgrade = $this->Member_model->baca_data($this->tabel_upgrade);
				$nama = $this->Member_model->nama();
			}

			// untuk melihat daftar mentor yang ada
			$daftar_mentor = NULL;
			if ($page == 'tambah_post' || $page == 'edit_post') {
				$daftar_mentor = $this->Member_model->baca_data($this->tabel_mentor);			
			}

			// untuk melihat postnya
			$z = array('content.judul','author.nama_mentor', 'content.view', 'content.kategori', 'content.status', 'content.id_content');
			$sama = "content.id_mentor=author.id_mentor";
			$a = $this->Member_model->view_join($z, $this->tabel_post, $this->tabel_mentor, $sama);

			$data = array(
						'page' => $page,
						'menu' => base_url('asset/dashboard_admin/menu.php'),
						'content' => 'dashboard',
						'member' => $this->Member_model->baca_data($this->tabel_member),
						'upgrade' => $this->Member_model->baca_data($this->tabel_upgrade),
						'post' => $a,
						'post_id' => $view_id,
						'mentor' => $this->Member_model->baca_data($this->tabel_mentor),
						'nama' => $nama,
						'edit_mentor' => $view_mentor,
						'daftar_mentor' => $daftar_mentor 
					);



			$this->load->view('admin/dashboard/layout',$data);

			// untuk logout
			if ($page == 'logout') {
				$this->session->sess_destroy('status_masuk');
				redirect('admin');
			}
		}

		// Aksi untuk Member
		public function hapus() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$id = $this->uri->segment(3);
			$where = array('id' => $id);
			$this->Member_model->hapus($this->tabel_member, $where);
			redirect('admin/dashboard/member');
		}


		// Aksi untuk post
		public function input_data() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$post = $this->input->post();
			$data_input = array(
							'judul' => $post['judul'], 
							'content' => $post['content'],
							'id_mentor' => $post['id_mentor'],
							'kategori' => $post['kategori'],
							'date' => date('Y-m-d H:i:s'),
							'view' => 0,
							'status' => $post['status'],
							'link' => url_title($post['judul'], '-', TRUE)
						);
			$input = $this->Member_model->create($this->tabel_post, $data_input);
			redirect('admin/dashboard/post');
		}

		public function hapus_post() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$id = $this->uri->segment(3);
			$where = array('id_content' => $id);
			$this->Member_model->hapus($this->tabel_post, $where);
			redirect('admin/dashboard/post');
		}

		public function hapus_upgrade() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$id = $this->uri->segment(3);
			$where = array('id_upgrade' => $id);
			$this->Member_model->hapus($this->tabel_upgrade, $where);
			redirect('admin/dashboard/upgrade');
		}

		public function upgrade_member() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$get = $this->input->get();
			$id_upgrade = $get['id_upgrade'];
			$id_member = $get['id_member'];
			$where_upgrade = array('id_upgrade' => $id_upgrade);
			$where_member = array('id' => $id_member);
			$baru_ugrade = array('lunas' => 1 );
			$baru_member = array('status' => 'premium' );
			$this->Member_model->update_data($this->tabel_upgrade, $where_upgrade, $baru_ugrade);
			$this->Member_model->update_data($this->tabel_member, $where_member, $baru_member);
			redirect('admin/dashboard/upgrade');
		}


		// tambah mentor
		public function input_mentor() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$post = $this->input->post();
			$data_input = array(
							'nama_mentor' => $post['nama'], 
							'line' => $post['line'],
							'wa' => $post['wa']
						);
			$input = $this->Member_model->create($this->tabel_mentor, $data_input);
			redirect('admin/dashboard/mentor');		
		}

		// update mentor
		public function update_mentor() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$post = $this->input->post();
			$data_update = array(
							'nama_mentor' => $post['nama'], 
							'line' => $post['line'],
							'wa' => $post['wa']
						);
			$where = array('id_mentor' => $post['id_mentor']);
			print_r($data_update);
			$this->Member_model->update_data($this->tabel_mentor, $where,$data_update);
			redirect('admin/dashboard/mentor');
		}

		// hapus mentor
		public function hapus_mentor() {
			$this->cek_login->cek_sesi($this->data_login, 'status_masuk', 'ya', 'admin');
			$id = $this->uri->segment(3);
			$where = array('id_mentor' => $id);
			$this->Member_model->hapus($this->tabel_mentor, $where);
			redirect('admin/dashboard/mentor');
		}


		// testing
		public function testing() {
			$data = array('content.judul','author.nama_mentor', 'content.view', 'content.kategori', 'content.status');
			$sama = "content.id_mentor=author.id_mentor";
			$a = $this->Member_model->view_join($data, $this->tabel_post, $this->tabel_mentor, $sama);
			print_r($a);
			foreach ($a as $row) {
				echo $row['nama_mentor']."<br>";
			}
		}

	}
	
	/* End of file Admin.php */
	/* Location: ./application/controllers/Admin.php */


?>
