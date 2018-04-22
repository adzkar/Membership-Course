<?php
	if (isset($url) && $url != 'modul') {
		// cek apakah member dapat mengakses premium content
		// buat tingkatan kekuatannya dulu
		$tingkat_konten = 1;
		$hak_akses = 1;

		// set tingkat kontent premium
		if ($isi[0]['status'] == 'premium') $tingkat_konten = 2;
		// akhir set tingkat kontent premium

		// set status
		if ($status == 'premium') $hak_akses = 2;
		// akhir set status

		// Hak akses
		if ($hak_akses < $tingkat_konten)
			// Jika Konten Premium Di Blokir
			$this->load->view('member/c_blokir_content');
		 else
				// untuk menampilkan content video
				$this->load->view('member/c_video');
		 //untuk tingkat konten
		// akhir hak akses
	}
	// jika url adalah modul
	else if (isset($url) && $url == 'modul'){
		if(count($isi) > 0) $this->load->view('member/c_modul');
		else $this->load->view('member/c_content_not_found');
	}
	// jika url tidak diset
	else {
		$banyak_data = count($content) - 1;
		if ($banyak_data == -1)
			// jika tidak ada konten yang tersedia untuk ditampilkan
			$this->load->view('member/c_content_not_found');
		 else
			// list of content
			$this->load->view('member/c_list_video');
		// punya else yg jika data == 0
	} // jika url tidak di set
?>
