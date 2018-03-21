<?php
	if (isset($url)) {
		// cek apakah member dapat mengakses premium content
		// buat tingkatan kekuatannya dulu
		$tingkat_konten = 1;
		$hak_akses = 1;
		if ($isi[0]['status'] == 'premium') {
			$tingkat_konten = 2;
		}
		if ($status == 'premium') {
			$hak_akses = 2;
		}
		if ($hak_akses < $tingkat_konten) {
// Jika Konten Premium Di Blokir
?>
<img src="<?=base_url('asset/member/img/sad.png')?>" alt="" class="sorry">
<p class="deskripsi pesan-sorry" style="text-align: center">
	Maaf Keanggotaan anda saat ini tidak dapat mengakses halaman ini. Untuk mengakses lakukan upgrade terlebih dahulu dengan <br>
	<a href="<?=base_url('member/dashboard/upgrade')?>" class="btn-besar">Klik Disini</a>
</p>
<?php
		} else {
	// untuk menampilkan content
?>
<div class="frame_video">
	<div class="video">
		<iframe src="<?=$isi[0]['content']?>" class="video" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="judul">
		<?=$isi[0]['judul']?>
	</div>
	<div class="time">
		<i class="fa fa-clock"></i> <?=$isi[0]['date']?>
	</div>
	<div class="author">
		<i class="fa fa-user"></i> <button type="button" data-toggle="modal" data-target="#myModal"> <?=$isi[0]['nama_mentor']?></button>

	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title mymodal-text">Author</h4>
			</div>
			<div class="modal-body mymodal-text">
				<div class="row">
					<div class="col-md-4">
						<b>Nama</b>
					</div>
					<div class="col-md-8">
						<?=$isi[0]['nama_mentor']?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<b>WA</b>
					</div>
					<div class="col-md-8">
						<?=$isi[0]['wa']?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<b>Line</b>
					</div>
					<div class="col-md-8">
						<?=$isi[0]['line']?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<?php
		} //untuk tingkat konten
	} else {
		$banyak_data = count($content) - 1;
		if ($banyak_data == -1) {
			// jika tidak ada konten yang tersedia untuk ditampilkan
?>
	<img src="<?=base_url('asset/member/img/sad.png')?>" alt="" class="sorry">
	<p class="deskripsi pesan-sorry" style="text-align: center">
		Belum Terdapat Materi untuk Bagian Ini
	</p>
<?php
		} else {
			// list of content
?>
<h3>List of Content : </h3>
<table class="table table-hover" id="tabelnya">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Daftar Materi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      	for($i = 1;$i <= count($content)-1;++$i) {
      		echo "<tr>";
      		echo "<td># ".$i."</td>";
      		echo "<td>";
      		echo anchor("member/dashboard/$page/".$content[$i-1]['link'],$content[$i-1]['judul']);
      		if ($content[$i-1]['status'] == 'premium') {
	      		echo "<div class='premium-badge'>";
	      		echo strtoupper($content[$i-1]['status']);
	      		echo "</div>";
      		}
      		echo "</td>";
      		echo "</tr>";
		}// punya for

      ?>
    </tr>
  </tbody>
</table>
<?php

		}// punya else yg jika data == 0
	}
?>
