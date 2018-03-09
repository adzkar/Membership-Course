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

	}







?>
