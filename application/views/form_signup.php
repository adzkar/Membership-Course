<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url('asset/login/')?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/login/')?>css/main.css">
<!--===============================================================================================-->
	<style type="text/css">
		.kotak {
			background-color: #f2f2f2;
			text-align: justify;
			padding: 10px;
			border-radius: 10px;
			margin-bottom: 10px;
		}
		@media(min-width: 800px) {
			div.wrap-login100 {
				width: 40%;
			}
		}
	</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="<?=base_url("member/signup/proses")?>" method="post">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
					<?php  
						if (isset($status) && $status == 'sukses') {
					?>
						<div class="alert alert-success">
							<p>
								<strong>Sukses !</strong> Membuat Akun... <br>
								Untuk login <a href="<?=base_url()?>" class="alert-link">Klik Disini</a>
							</p>
						</div>
					<?php
						} else if (isset($status) && $status == 'gagal') {
					?>
						<div class="alert alert-danger">
							<p>
								<strong>Gagal !</strong> Membuat Akun... <br>
								Tolong Hubungi admin di halaman <a href="" class="alert-link">Contact Us</a>
							</p>
						</div>
					<?php
						}
					?>
					<?php  
						if (isset($error)) {
					?>
						<div class="alert alert-danger">
							<p>
								<strong><?=$error?></strong>
							</p>
						</div>
					<?php
						}
					?>
					<div class="wrap-input100 validate-input" data-validate = "Enter nama">
						<input class="input100" type="text" name="nama" required="">
						<span class="focus-input100" data-placeholder="Nama *"></span> 
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" required="">
						<span class="focus-input100" data-placeholder="Email *"></span> 
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Password *"></span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="line">
						<span class="focus-input100" data-placeholder="ID Line **"></span> 
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="nohp">
						<span class="focus-input100" data-placeholder="No. HP / WA **"></span> 
					</div>

					<p class="kotak">
						N.B : <br>
						~ *  ( Wajib ) <br>
						~ ** ( Pilih Salah Satu ) <br>
						Untuk ID Line / WA digunakan agar kami dapat menghubungi peserta didik, sehingga pembelajaran menjadi lebih interaktif.  &nbsp &nbsp :)
					</p>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="tombol">
								Signup
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Have you registered ?
						</span>

						<a class="txt2" href="<?=base_url()?>">
							login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url('asset/login/')?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url('asset/login/')?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('asset/login/')?>js/main.js"></script>

</body>
</html>
