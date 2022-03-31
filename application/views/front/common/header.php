
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<?php
	$sessionDetail = $this->session->userdata( 'userdata' );
	@$uid = $sessionDetail[ 'id' ];
	@$uname = $sessionDetail[ 'user_name' ];
	@$uemail = $sessionDetail[ 'user_email' ];
//	echo $uid;
//    echo CI_VERSION;
?>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Best Hotel in Thane, Best Hotel in Balkum, Fine Dine">
	<meta name="description" content="MHO - Hotel and Bed&amp;Breakfast">
	<meta name="author" content="MHO">
	<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
	 <title>Midway Dhaba</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="<?= base_url('asset/images/favicon.ico'); ?>" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
</style>
<style>
@import url('https://fonts.googleapis.com/css?family=Lovers+Quarrel');
</style>

	<?= link_tag('asset/css/open-iconic-bootstrap.min.css'); ?>
	<?= link_tag('asset/css/animate.css'); ?>
	<?= link_tag('asset/css/owl.carousel.min.css'); ?>
	<?= link_tag('asset/css/owl.theme.default.min.css'); ?>
	<?= link_tag('asset/css/magnific-popup.css'); ?>
	<?= link_tag('asset/css/aos.css'); ?>

	<?= link_tag('asset/css/ionicons.min.css'); ?>
	<?= link_tag('asset/css/bootstrap-datepicker.css'); ?>
	<?= link_tag('asset/css/jquery.timepicker.css'); ?>
	<?= link_tag('asset/css/flaticon.css'); ?>
	<?= link_tag('asset/css/icomoon.css'); ?>
	<?= link_tag('asset/css/style.css'); ?>
	
	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<SCRIPT language=JavaScript src="<?= base_url('asset/js/ggl.js') ?>"></SCRIPT>
	<SCRIPT language=JavaScript src="<?= base_url('asset/js/validation.js') ?>"></SCRIPT>

<SCRIPT language=JavaScript src="<?= base_url('https://cdn.userway.org/widget.js') ?>"></SCRIPT>
</head>
<?php
$d = new DateTime('+1day');
$tomorrow = $d->format('M d, Y');
?>

<body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Midway Dhaba</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Midway</a></li>
	        	<li class="nav-item"><a href="<?= base_url('Menu-List'); ?>" class="nav-link">Specialties</a></li>
	        	<!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="menu.html" class="nav-link">Specialties</a></li>
	        	<li class="nav-item"><a href="reservation.html" class="nav-link">Reservation</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Stories</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    
	<!-- End parallax-window -->
	<!-- End SubHeader ============================================ -->