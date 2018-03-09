<?php  
	if ($status == 'free') {
		// untuk cek apakah sudah melakukan registrasi atau belum
		if ($cek != NULL) {
?>
	<img src="<?=base_url('asset/member/img/wait.jpg')?>" alt="" style="width: 50%;text-align: center;">
	<p class="deskripsi" style="text-align: center">
		Proses Upgrade anda sedang di proses
	</p>
<?php
		} else {
?>
<p>
	<h1>Upgrade Membershipmu Sekarang !!</h1>
	<img src="<?=base_url('asset/member/img/minion.png')?>" style="width: 80%" alt="">
	<hr>
	<p class="deskripsi center">
		Untuk upgrade membership lakukan transfer sejumlah Rp. 100.xxx,00. Dengan xxx adalah 3 digit no unik yang nantinya akan mempermudah kami dalam mengkonfirmasi pembayaran.
	</p>
	<p class="deskripsi center">
		Jika sudah melakukan transfer harap melakukan konfirmasi pembayaran di <?=anchor('member/dashboard/upload_bukti','Disini')?>
	</p>

</p>
<?php	
		}//else
	} else {
		redirect('member/dashboard');
	}
?>
