<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('asset/dashboard_admin/')?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('asset/dashboard_admin/')?>img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url('asset/dashboard_admin/')?>css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?=base_url('asset/dashboard_admin/')?>css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?=base_url('asset/dashboard_admin/')?>css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url('asset/dashboard_admin/')?>css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url('asset/dashboard_admin/')?>css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
        <div class="sidebar-wrapper">


            <ul class="nav">
                <li <?php if (!isset($page)) {
                    echo 'class = "active"';
                } ?> >
                    <a href="<?=base_url('admin/dashboard')?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if ($page == 'post' || $page == 'tambah_post' || $page == 'edit_post') {
                    echo 'class = "active"';
                } ?> >
                    <a href="<?=base_url('admin/dashboard/post')?>">
                        <i class="ti-plus"></i>
                        <p>Post</p>
                    </a>
                </li>
								<li <?php if ($page == 'modul' || $page == 'tambah_modul' || $page == 'edit_modul') {
                    echo 'class = "active"';
                } ?> >
                    <a href="<?=base_url('admin/dashboard/modul')?>">
                        <i class="ti-files"></i>
                        <p>Modul</p>
                    </a>
                </li>
                <li <?php if ($page == 'mentor' || $page == 'tambah_mentor' || $page == 'edit_mentor') {
                    echo 'class = "active"';
                } ?> >
                    <a href="<?=base_url('admin/dashboard/mentor')?>">
                        <i class="ti-book"></i>
                        <p>Mentor</p>
                    </a>
                </li>
                <li <?php if ($page == 'member') {
                    echo 'class = "active"';
                } ?> >
                    <a href="<?=base_url('admin/dashboard/member')?>">
                        <i class="ti-user"></i>
                        <p>Member</p>
                    </a>
                </li>
                <li <?php if ($page == 'upgrade') {
                    echo 'class = "active"';
                } ?> >
                    <a href="<?=base_url('admin/dashboard/upgrade')?>">
                        <i class="ti-angle-double-up"></i>
                        <p>Upgrade</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('admin/dashboard/logout')?>">
                        <i class="ti-arrow-circle-left"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>

    </div>
