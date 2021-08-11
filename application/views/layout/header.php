<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- HAYOOO NGINTIP YAA, KAMI PERINGATKAN JANGAN BERTINDAK SEMBARANGAN... -->

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Website KKN 79 UPN Veteran Jatim">
	<meta name="keywords" content="KKN, 79, UPN Veteran, Jatim, Jawa Timur, 2021, Website KKN">
	<meta name="author" content="Devan, Rendra, Sarah, Ramadhan">

	<!-- CSS Custom -->
	<link rel="icon" href="<?= base_url('assets/img/umum/LogoKKN.ico') ?>">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.css') ?>">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Judul Page -->
	<title><?php echo $judul; ?></title>
</head>

<body>
	<!-- HEADER -->
	<header>
		<div class="header-wrap">
			<img class="header-logo" src="<?php echo base_url('assets/img/umum/LogoKKN.png') ?>">

			<h3>Selamat Datang di Website KKN 79 <br><span>Universitas Pembangunan Nasional "Veteran" Jawa Timur 2021<span></h3>
			<p>Kelurahan Tlogo Patut, Kecamatan Gresik, Kabupaten Gresik, 61111, Jawa Timur, Indonesia</p>

			<a href="<?php echo base_url('menu/kontak') ?>" type="button" class="btn btn-outline-primary btn-kontak"><i class="fas fa-phone fa-fw me-1"></i>Kontak Kami</a>
			<a href="<?php echo base_url('menu/tentang') ?>" type="button" class="btn btn-outline-success btn-tentang"><i class="fas fa-users fa-fw me-1"></i>Tentang Kami</a>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<form class="d-flex">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class=" navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item me-2">
								<a class="nav-link" href="<?= base_url('/') ?>"><i class="fas fa-home fa-fw me-1"></i>Beranda</a>
							</li>
							<li class="nav-item me-2">
								<a class="nav-link" href="<?= base_url('menu/tentang') ?>"><i class="fas fa-users fa-fw me-1"></i>Tentang Kami</a>
							</li>
							<li class="nav-item dropdown me-2">
								<a class="nav-link a" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fas fa-angle-down fa-fw"></i>Luaran
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="<?= base_url('#beritaKKN') ?>"><i class="fas fa-bullhorn fa-fw me-3"></i>Berita</a></li>
									<li><a class="dropdown-item" href="<?= base_url('#artikel-ilmiahKKN') ?>"><i class="fas fa-feather-alt fa-fw me-3"></i>Artikel Ilmiah</a></li>
									<li><a class="dropdown-item" href="<?= base_url('#modulKKN') ?>"><i class="fas fa-book fa-fw me-3"></i>Modul</a></li>
									<li><a class="dropdown-item" href="https://radargresik.jawapos.com/lifestyle/28/07/2021/kkn-kelompok-79-upn-veteran-optimalkan-penghijauan-dengan-hidroponik/"><i class="fas fa-newspaper fa-fw me-3"></i>Berita Lainnya</a></li>
								</ul>
							</li>
							<li class="nav-item me-2">
								<a class="nav-link" href="<?= base_url('menu/kontak') ?>"><i class="fas fa-phone fa-fw me-1"></i>Kontak</a>
							</li>
						</ul>
					</div>
				</form>
			</div>
		</nav>
	</header>



	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}

		body,
		input,
		button {
			font-family: "Open Sans", sans-serif;
		}

		header {
			display: inline;
		}

		.navbar {
			width: 100%;
			background: linear-gradient(-45deg, rgba(143, 83, 255, 0.4), rgba(144, 238, 144, 0.4));
			padding: 15px;
			position: sticky;
			top: 0;
			z-index: 999;
			font-weight: bold;
			color: white;
			font-size: 14px;
		}

		.navbar-collapse {
			padding-left: 20px;
		}

		.nav-item {
			float: right;
		}

		.nav-title {
			padding-left: 30px;
		}

		.header-wrap {
			text-align: center;
			padding-bottom: 40px;
			color: black;
		}

		.header-wrap h3 {
			font-size: 30px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.header-wrap h3 span {
			line-height: 30px;
		}

		.header-wrap p {
			font-size: 15px;
			line-height: 30px;
		}

		.header-logo {
			height: 350px;
			width: 350px;
			margin: 50px 0px 0px 0px;
		}

		.btn-kontak,
		.btn-tentang {
			border-radius: 20px;
			padding-top: 10px;
			width: 250px;
			height: 45px;
			font-weight: bold;
			margin: 10px 20px 10px 20px;
		}

		.header-wrap {
			background-image: url("<?= base_url('assets/img/umum/headerbg.jpg'); ?>");
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}

		body {
			background-image: url("<?= base_url('assets/img/umum/background.jpg'); ?>");
			margin: 0;
		}

		.artikel-ilmiah {
			margin-bottom: 20px;
		}

		.modul {
			margin-bottom: 20px;
		}

		.card-wrap-1 {
			height: 100%;
		}

		.card-wrap-2 {
			height: 100%;
		}

		.home-news {
			height: 120px;
		}

		.card-title {
			font-size: 18px;
			text-align: left;
			font-weight: bold;
		}

		.card-text {
			font-size: 13px;
			text-align: justify;
		}

		.title-content {
			margin-top: 80px;
			margin-bottom: 80px;
		}

		.arrow {
			font-size: 12px;
		}

		.sosmed {
			font-size: 40px;
		}

		.instagram {
			color: #405DE6;
		}

		.instagram:hover {
			color: #2944c4;
			transition: transform .25s, visibility .25s ease-in;
			-webkit-transform: scale(1.06);
			transform: scale(1.06);
		}

		.facebook {
			color: #3b5998;
		}

		.facebook:hover {
			color: #203258;
			transition: transform .25s, visibility .25s ease-in;
			-webkit-transform: scale(1.06);
			transform: scale(1.06);
		}

		.youtube {
			color: #c4302b;
		}

		.youtube:hover {
			color: #5a0300;
			transition: transform .25s, visibility .25s ease-in;
			-webkit-transform: scale(1.06);
			transform: scale(1.06);
		}

		.twitter {
			color: #00acee;
		}

		.twitter:hover {
			color: #04729d;
			transition: transform .25s, visibility .25s ease-in;
			-webkit-transform: scale(1.06);
			transform: scale(1.06);
		}

		.gmail {
			color: #008710;
		}

		.gmail:hover {
			color: #07420e;
			transition: transform .25s, visibility .25s ease-in;
			-webkit-transform: scale(1.06);
			transform: scale(1.06);
		}

		.ketua {
			margin: 0 auto;
			padding: 60px 13px 100px 13px;
		}

		.ketua-divisi {
			margin: 0 auto;
			position: relative;
		}

		.anggota {
			margin: 0 auto;
			margin-bottom: 80px;
		}

		.anggota-divisi {
			margin: 0 auto;
			position: relative;
		}

		.tentang-wrap:hover,
		.card-wrap-1:hover,
		.card-wrap-2:hover {
			transition: transform .25s, visibility .25s ease-in;
			-webkit-transform: scale(1.02);
			transform: scale(1.02);
			box-shadow: 0px 0px 2px 2px #8b8b8b;
		}

		.berita-modal {
			margin-top: 10%;
		}

		.artikel-modal {
			margin-top: 10%;
		}

		.modul-modal {
			margin-top: 10%;
		}

		.modal-header {
			background: linear-gradient(-45deg, rgba(143, 83, 255, 0.4), rgba(144, 238, 144, 0.4));
		}

		.modal-footer {
			background: linear-gradient(-45deg, rgba(144, 238, 144, 0.4), rgba(143, 83, 255, 0.4));
		}

		.berita-tittle {
			font-size: 30px;
		}

		.berita-img {
			width: 800px;
			height: 450px;
			width: 100%;
			height: 100%;
			padding: 0px 20px 0px 20px;
			margin: 0 auto;
		}

		.header-berita {
			padding-left: 15%;
			padding-right: 15%;
		}

		.content-berita {
			font-size: 15px;
		}

		.footer-berita {
			margin-top: 12px;
			padding-left: 15%;
			padding-right: 15%;
		}

		.subtitle {
			margin-top: 10px;
		}

		.artikel-tittle {
			font-size: 30px;
		}

		.modul-tittle {
			font-size: 30px;
		}

		.header-artikel {
			padding-left: 15%;
			padding-right: 15%;
		}

		.header-modul {
			padding-left: 15%;
			padding-right: 15%;
		}

		.content-artikel {
			font-size: 15px;
		}

		.content-modul {
			font-size: 15px;
		}

		.footer-artikel {
			margin-top: 12px;
			padding-left: 15%;
			padding-right: 15%;
		}

		.footer-modul {
			margin-top: 12px;
			padding-left: 15%;
			padding-right: 15%;
		}

		/*Tablet*/
		@media screen and (max-width: 500px) {
			footer {
				padding: 60px;
			}

			footer p {
				font-size: 15px;
			}
		}

		/*Tablet*/
		@media screen and (max-width: 350px) {
			footer {
				padding: 100px;
			}

			footer p {
				font-size: 15px;
			}
		}

		/* Smartphone */
		@media only screen and (max-width: 300px) {
			.header-wrap {
				margin: 0;
				padding: 0;
			}

			footer {
				padding: 60px;
			}

			footer p {
				font-size: 12px;
			}

			.btn-kontak,
			.btn-tentang {
				border-radius: 20px;
				padding-top: 10px;
				width: 240px;
				height: 45px;
				font-weight: bold;
				margin: 10px 10px 10px 10px;
			}

			.header-wrap {
				padding-bottom: 30px;
			}
		}
	</style>