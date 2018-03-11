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

		public function cek_uang($uang) {
			$error = 0;
			if (!is_numeric($uang) || strlen($uang) != 12 || strlen($uang) != 13) {
				return 1;
			}
		}

	}







?>
