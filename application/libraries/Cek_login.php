<?php


	class Cek_login
	{

		protected $ci;

		public function __construct()
		{
			$this->ci =& get_instance();
		}


		public function cek_sesi() {
			if ($_SESSION['status_masuk'] != 'ya') {
				redirect('admin');
			}
		}

		public function cek_sesi_member() {
			if ($_SESSION['member_masuk'] != 'ya') {
				redirect('member');
			}
		}

		public function cek_hp($angka) {
			$error = 0;
			if (is_numeric($angka) == false) {
				$error = 1;
			} else if (strlen($angka) < 11 && strlen($angka) > 13) {
				$error = 1;
			}
			return $error;
		}

		public function cek_lagi($angka) {
			$error = 0;
			if (is_numeric($angka) == false) {
				$error = 1;
			} else if (strlen($angka) < 11 && strlen($angka) > 13) {
				$error = 1;
			}
			return $error;
		}

	}







?>
