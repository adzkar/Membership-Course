<?php  
	if (!isset($page)) {
?>
	<div class="frame_video">
		<div class="video">
		</div>
		<div class="judul">
			Introduction Lorem Ipsum Dolor Sit Amet
		</div>
		<div class="time">
			<i class="fa fa-clock-o"></i> 10.30, 19 October 2018
		</div>
	</div>
<?php
	} else if ($page == 'upgrade') {
		$this->load->view('member/c_upgrade');
	} else if ($page == 'upload_bukti') {
		$this->load->view('member/c_upload_bukti');
	}
?>