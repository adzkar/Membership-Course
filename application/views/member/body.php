<center>
		<div id="main-section">
		<div id="wrapper">
			<div class="row">
				<div class="col-md-3">
					<div id="menu">
						<ul>
							<li><a href="<?=base_url('member/dashboard')?>" class="active">Home</a></li>
							<?php  
								if (isset($page) && ($page == 'basic' OR $page == 'advance')) {
							?>
							<li><a onclick="myFunction()" class="btn">Video</a></li>
							<div id="myDropdown" class="hide">
								<?php  
									for($i = 0;$i < count($content)-1;++$i) {
										echo "<a href='".base_url("member/dashboard/$page/".$content[$i]['link'])."'>".$content[$i]['judul']."</a>";
									}
								?>
								<a href="#contact">Others <i class="fa fa-angle-double-right other"></i></a>
							</div>
							<li><a href="">Modul</a></li>
							<?php  
								}
							?>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<div id="content">
						<div class="section">
							<?php  
								$judul = NULL;
								if (!isset($page)) {
									$judul = "Home";
								} else if ($page == 'upgrade') {
									$judul = "Upgrade";
								} else if ($page == 'upload_bukti') {
									$judul = "Upload Bukit Pembayaran";
								} else if ($page == 'terimakasih') {
									$judul = "Terimakasih Telah Melakukan Pembayaran";
								} else if ($page == 'basic') {
									$judul = "Basic Material";
								} else if ($page == 'advance') {
									$judul = "Advance Material";
								}
								echo $judul;
							?>
						</div>
						<?php  
								if ($page == 'upgrade') {
									$this->load->view('member/c_upgrade');
								} else if ($page == 'upload_bukti') {
									$this->load->view('member/c_upload_bukti');
								} else if ($page == 'terimakasih') {
									$this->load->view('member/c_terimakasih');
								} else if ($page == 'basic') {
									$this->load->view('member/c_basic');
								} else if ($page == 'advance') {
									$this->load->view('member/c_basic');
								} else {
									$this->load->view('member/c_home');
								}
							?>
					</div>
				</div>
			</div>
		</div> <!-- wrapper -->
		</div>
	</center>
	<div id="footer">
		<div class="text">
			<div class="fa fa-copyright"></div> Copyright, All right is reserved by Dougle Class
		</div>
	</div>
</body>
	<script>
		function myFunction() {
    		document.getElementById("myDropdown").classList.add("dropdown");
    		document.getElementById("myDropdown").classList.remove("hide");
		}

		window.onclick = function(event) {
			if (!event.target.matches('.btn')) {

				document.getElementById("myDropdown").classList.add("hide");
				document.getElementById("myDropdown").classList.remove("dropdown");

				// var dropdowns = document.getElementsByClassName("dropdown");
				// var i;
				// for (i = 0; i < dropdowns.length; i++) {
				// 	var openDropdown = dropdowns[i];
				// 	if (openDropdown.classList.contains('show')) {
				// 		openDropdown.classList.remove('show');
				// 	}
				// }
			}
		}
	</script>
</html>
