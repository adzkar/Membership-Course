<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>English Course</title>
	<link rel="stylesheet" href="<?=base_url('asset/member/')?>css/font-awesome.css">
	<link rel="stylesheet" href="<?=base_url('asset/member/')?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url('asset/member/')?>css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url('asset/member/')?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('asset/member/')?>css/css.css">
	<link rel="stylesheet" href="<?=base_url('asset/member/')?>css/tambah.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	

	<script src="<?=base_url('asset/member/')?>js/bootstrap.js"></script>
	<script src="<?=base_url('asset/member/')?>js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="navbar">
		<ul>
			<center>
				<div id="wrapper">
					<li class="image">
						<a href="<?=base_url('member/dashboard')?>">
							<img src="<?=base_url('asset/member/')?>img/dougle_white.png" alt=" logo">
						</a>
					</li>
					<!-- responsive navbar menjadi sidebar di kanan -->
					<li class="button"><div class="responsive_menu">
						<i class="fa fa-bars"></i>
						<div class="sidebar_menu">
							<div class="icon">
								<div class="fa fa-user"></div>
								<div class="nama">
									<?=ucfirst($nama)?>
								</div>
								<div class="space_button">
									<div class="button_in_drop">
										<a href="#">Edit Profil</a>
									</div>
									<div class="logout button_in_drop">
										<a href="<?=base_url('member/dashboard/logout')?>">Logout</a>
									</div>
								</div>

							</div>
							<div class="box_kelas">
								<a href="<?=base_url('member/dashboard/basic')?>" title="" class="kelas">Basic</a>
								<a href="<?=base_url('member/dashboard/advance')?>" title="" class="kelas">Advance</a>
							</div>
						</div></div>
					</li>
					<!-- akhir responsive navbar -->
						<li class="akun"><?=strtoupper($nama)?>
							<div style="float: right" class="akun_drop">
								<div class="icon">
									<div class="fa fa-user"></div>
									<div class="nama">
										<?=ucfirst($nama)?>
									</div>
									<div class="space_button">
										<div class="button_in_drop">
											<a href="#">Edit Profil</a>
										</div>
										<div >
											<a class="logout button_in_drop" href="<?=base_url('member/dashboard/logout')?>">Logout</a>
										</div>
									</div>
								</div>
							</div></li>
							<div class="level">
								<li class="button"><a class="class btn" style="color: #fff" href="<?=base_url('member/dashboard/advance')?>" type="">Advance</a>
								<li class="button"><a class="class btn" style="color: #fff" href="<?=base_url('member/dashboard/basic')?>" type="">Basic</a>
								</div>
								<?php  
									if ($status == 'free') {
								?>
								<li class="button"><a class="btn upgrade" type="" href="<?=base_url('member/dashboard/upgrade')?>">UPGRADE</a>
								<?php
									}
								?>
									</div>
								</div>
								<?php  
									if ($status == 'free') {
								?>
								<a type="" class="responsive_upgrade">
									UPGRADE
								</a>
								<?php  
									}
								?>
								</center>
							</ul>
						</div>
						<div id="space">

						</div>
