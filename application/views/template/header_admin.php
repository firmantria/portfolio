<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>Portfolio Admin</title>
	<meta content="Admin Dashboard" name="description" />
	<meta content="Mannatthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="<?= base_url()?>asset/portofolio-img/logo-portfolio.png">

	<link href="<?= base_url() ?>asset/admin/plugins/morris/morris.css" rel="stylesheet">
	<link href="<?= base_url() ?>asset/admin/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>asset/admin/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>asset/admin/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>asset/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>asset/admin/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>asset/admin/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">
<div id="preloader">
	<div id="status">
		<div class="spinner"></div>
	</div>
</div>
<div id="wrapper">
	<div class="left side-menu">
		<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
			<i class="ion-close"></i>
		</button>
		<!-- LOGO -->
		<div class="topbar-left">
			<div class="text-center">
				<a href="<?= base_url()?>cms" class="logo"><i class="mdi mdi-account-settings-variant"></i> Admin</a>
			</div>
		</div>
		<div>
			<div id="sidebar-menu">
				<ul>
					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="ion-social-buffer"></i> <span> Menu
							</span>
							<span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?= base_url()?>my-skill">Skill</a></li>
							<li><a href="<?= base_url()?>pengalaman-kerja">Pengalaman Kerja</a></li>
							<li><a href="<?= base_url()?>riwayat-pendidikan">Pendidikan</a></li>
							<li><a href="<?= base_url()?>service">Service</a></li>
							<li><a href="<?= base_url()?>inbox">Inbox</a></li>
							<li><a href="<?= base_url()?>code-practice">Code Practice</a></li>
						</ul>
               </li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- end sidebarinner -->
	</div>
	<div class="content-page">
		<!-- Start content -->
		<div class="content">
			<!-- Top Bar Start -->
			<div class="topbar">
				<nav class="navbar-custom">
					<ul class="list-inline float-right mb-0">
						<li class="list-inline-item dropdown notification-list">
							<a href="<?= base_url()?>pesan" class="nav-link dropdown-toggle arrow-none waves-effect"
								role="button" aria-haspopup="false" aria-expanded="false">
								<i class="ti-email noti-icon"></i>
								<span class="badge badge-danger noti-icon-badge">17</span>
							</a>
						</li>
						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
								href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
								<img src="<?= base_url() ?>asset/admin/images/users/avatar-1.jpg" alt="user"
									class="rounded-circle">
							</a>
							<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<h5><?= $user ?></h5>
								</div>
								<a class="dropdown-item" href="<?= base_url() ?>" target="_blank"><i class="mdi mdi-account-circle m-r-5 text-muted"></i>
									My Portofolio</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url() ?>logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
							</div>
						</li>
					</ul>
					<ul class="list-inline menu-left mb-0">
						<li class="float-left">
							<button class="button-menu-mobile open-left waves-light waves-effect">
								<i class="mdi mdi-menu"></i>
							</button>
						</li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div>