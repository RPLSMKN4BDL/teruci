<!DOCTYPE HTML>

<html>
	<head>
		<title>TeRuCI Lampung</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="aset/vendor/icofont/icofont.min.css" rel="stylesheet">
		<link href="aset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="aset/vendor/venobox/venobox.css" rel="stylesheet">
		<link href="aset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="aset/vendor/aos/aos.css" rel="stylesheet">

		<link rel="stylesheet" href="aset/css/main.css" />
	</head>
	<body>

		<!-- Top Bar -->
			<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
				<div class="container d-flex">
					<div class="contact-info mr-auto">
						<i class="icofont-phone"></i> +6283870387078
						<i class="icofont-location-pin"></i> Jalan Hos Cokroaminoto 102, Bandar Lampung
					</div>
				</div>
			</div>

		<!-- Header -->
			<header id="header" class="fixed-top ">
				<div class="container d-flex align-items-center">

					<h1 class="logo mr-auto"><a href="index.php">TeRuCI Lampung</a></h1>
					<!-- Uncomment below if you prefer to use an image logo -->
					<!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

					<nav class="nav-menu d-none d-lg-block">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#portfolio">Gallery</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="#cetak">Cetak ID</a></li>
							<li><a href="#daftar">Daftar</a></li>
						</ul>
					</nav><!-- .nav-menu -->
				</div>
			</header>
		<!-- End Header -->
    <?php
if(empty($_GET['hal'])){
include "home.php";
}else if($_GET['hal'] == 'register'){
include "register.php";
}else if($_GET['hal'] == 'about'){
include "about.php";
}else if($_GET['hal'] == 'cetak'){
include "cetakid.php";
}
?>

	
		<!-- Footer -->
		<footer id="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">

						<div class="container">
							<div class="copyright">
								&copy; Copyright <strong><span>2020 Terios Rush Club Indonesia</span></strong>. All Rights Reserved
							</div>
							<div class="credits">
								Designed by N.
							</div>
						</div>
		</footer>
		<!-- End Footer -->

		<!-- Vendor JS Files -->
		<script src="aset/vendor/jquery/jquery.min.js"></script>
		<script src="aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="aset/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="aset/vendor/php-email-form/validate.js"></script>
		<script src="aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="aset/vendor/venobox/venobox.min.js"></script>
		<script src="aset/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="aset/vendor/aos/aos.js"></script>

		<!-- Template Main JS File -->
		<script src="aset/js/main.js"></script>

	</body>
</html>