<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="MHO hotels, bed and breakfast, accommodations, travel, motel">
	<meta name="description" content="Membership Hotel Organization Trust MHO Hotels for brands and services that stand above others and resonate positively in consumers’ minds. Led by a team of experienced hotel owners and property developers who understand the hospitality business and have deep and wide connections within the industry to benefit their partners, clients and franchisees, MHO Hotels provides [&hellip;]">
	<meta name="author" content="MHO">
	<title>MHO - Hotels</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="<?= base_url('asset/images/favicon.ico'); ?>" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url('asset/images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url('asset/images/favicon.ico'); ?>">

	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />-->
	<?= link_tag('asset/css/star-rating.min.css'); ?>
	<?= link_tag('asset/css/bootstrap.css'); ?>
	<!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">-->


	<!-- BASE CSS -->
	<!-- 	<link href="css/base.css" rel="stylesheet"> -->
	<?= link_tag('asset/css/base.css'); ?>
	<!--	<link href="css/ggl.css" rel="stylesheet">-->



	<!-- SPECIFIC CSS -->
	<?= link_tag('asset/css/date_time_picker.css'); ?>
	<?= link_tag('asset/css/owl.carousel.css'); ?>
	<?= link_tag('asset/css/owl.theme.default.css'); ?>
	<!-- 	<link rel="stylesheet" type="text/css" href="css/DateTimePicker.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"> -->

	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<SCRIPT language=JavaScript src="<?= base_url('asset/js/ggl.js') ?>"></SCRIPT>
	<SCRIPT language=JavaScript src="<?= base_url('asset/js/validation.js') ?>"></SCRIPT>
	<script language="JavaScript" type="text/javascript">
		function validatForm( formName ) {



			var arrFieldNames = Array();
			var formobj = document.forms[ formName ];
			var i = 0;

			//						arrFieldNames[i++] = "check_in,Please Enter \"Check-in Date\";req:";
			//			arrFieldNames[i++] = "check_out,Please Enter \"Check-out Date\";req:";
			arrFieldNames[ i++ ] = "adults,Please enter only numeric values in the \"Adults guest(s)\";num:";
			arrFieldNames[ i++ ] = "children,Please enter only numeric values in the \"Childern guest(s)\";num:";
			arrFieldNames[ i++ ] = "adults,Adult guest cannot be \"less than one\";gt=0:";
			//arrFieldNames[i++] = "adults,Only \"Two Adults\" allowed per room;lt=3:";

			//			arrFieldNames[i++] = "txtname,Please Enter only alphabetic values in \"Family Head Name\";alphaspace:";
			arrFieldNames[ i++ ] = "hotel,Please select any one option for \"Hotel to stay\";dontselect=0:";
			//		    arrFieldNames[i++] = "abb,Please enter \"Abbreviation\";req:";
			//		    arrFieldNames[i++] = "abb,Please enter only alphabetic values in \"Abbreviation\";alpha:";
			//			arrFieldNames[i++] = "add,Please enter \"Address\";req:";
			//			arrFieldNames[i++] = "resPhone,Please enter only numeric values or \"-\" in the \"Resedential phone\";numhi:";
			//			arrFieldNames[i++] = "offPhone,Please enter only numeric values or \"-\" in the \"Office phone\";numhi:";
			//arrFieldNames[i++] = "mobile,Please enter only numeric values or \"-\" in the \"Mobile phone\";numhi:";

			//	arrFieldNames[i++] = "occupation,Please enter \"Occupation\";req:";		
			//			arrFieldNames[i++] = "occupation,Please enter only alphabetic values in \"Occupation\";alphaspacehyphen:";	
			/*arrFieldNames[i++] = "txtmaximiser,The allocation in the Maximiser fund cannot exceed 100%. \n Please enter correct value;lt=101:";
			arrFieldNames[i++] = "txtbalancer,The allocation in the Balancer fund cannot exceed 100%. \n Please enter correct value;lt=101:";
			arrFieldNames[i++] = "txtprotector,The allocation in the Protector fund cannot exceed 100%. \n Please enter correct value;lt=101:";
			arrFieldNames[i++] = "txtpreserver,The allocation in the Preserver fund cannot exceed 20%. \n Please enter correct value;lt=21:";*/


			var res = checkValidation( formobj, arrFieldNames );



			if ( res == true ) {
				//formobj.submit();
				myfunction();

			}
			return ( false );
		}

		function select_change() {
			var z = document.getElementById( "hotel" ).selectedIndex;
			var z1 = document.getElementsByTagName( "option" )[ z ].value;
			//alert("Form action changed to " + z1);
		}

		function myfunction() {

			// Calling Validation function.
			//select option value from select tag and storing it in a variable.
			var x = document.getElementById( "hotel" ).selectedIndex;
			var action = document.getElementsByTagName( "option" )[ x ].value;
			if ( action !== "" ) {

				document.getElementById( "form1" ).action = action;
				document.getElementById( "form1" ).submit();
			} else {
				alert( "Please set form action" );
			}

		}

		function today() {
			let d = new Date();
			let currDate = d.getDate();
			let currMonth = d.getMonth() + 1;
			let currYear = d.getFullYear();
			return currYear + "-" + ( ( currMonth < 10 ) ? '0' + currMonth : currMonth ) + "-" + ( ( currDate < 10 ) ? '0' + currDate : currDate );
		}
	</script>

	<script type="text/javascript">
		var _userway_config = {
			/* uncomment the following line to override default position*/
			/* position: '6', */
			/* uncomment the following line to override default size (values: small, large)*/
			/* size: 'large', */
			/* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
			/* language: 'en', */
			/* uncomment the following line to override color set via widget (e.g., #053f67)*/
			/* color: '#053f67', */
			/* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
			/* type: '2', */
			/* uncomment the following lines to override the accessibility statement*/
			/* statement_text: "Our Accessibility Statement", */
			/* statement_url: "http://www.example.com/accessibility", */
			/* uncomment the following line to override support on mobile devices*/
			/* mobile: true, */
			account: 'WOPXHoQfhY'
		};
	</script>
	<script>
		function changeComingSoon( id ) {
			//alert('yr');
			var elem = document.getElementById( id );
			if ( elem.value == "Book now" )
				elem.value = "Coming Soon, Thanks!";
			//document.getElementById( "caliin" ).style.color = "red";
		}

		function changeBookNow( id ) {
			//alert('yr');
			var elem = document.getElementById( id );
			if ( elem.value == "Coming Soon, Thanks!" )
				elem.value = "Book now";
			//document.getElementById( "caliin" ).style.color = "red";
		}
	</script>
	<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
</head>
<?php
$tomorrow = new DateTime( 'tomorrow' );
?>
<script type="text/javascript">
var _userway_config = {
/* uncomment the following line to override default position*/
/* position: '6', */
/* uncomment the following line to override default size (values: small, large)*/
/* size: 'large', */
/* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
/* language: 'en', */
/* uncomment the following line to override color set via widget (e.g., #053f67)*/
/* color: '#053f67', */
/* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
/* type: '2', */
/* uncomment the following lines to override the accessibility statement*/
/* statement_text: "Our Accessibility Statement", */
/* statement_url: "http://www.example.com/accessibility", */
/* uncomment the following line to override support on mobile devices*/
/* mobile: true, */
account: 'WOPXHoQfhY'
};
</script>
<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>
</head>
<?php
$d = new DateTime('+1day');
$tomorrow = $d->format('M d, Y');
?>
<body>

	<!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<!-- Header ================================================== -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col--md-3 col-sm-3 col-xs-3"> 
				<a href="index.php" id="logo"> 
				<img src="<?= base_url('asset/images/MHO-Hotels-250.png'); ?>"  alt="" data-retina="true" class="logo_normal"> 
				<img src="<?= base_url('asset/images/MHO-Hotels-250.png'); ?>" alt="" data-retina="true" class="logo_sticky"> 
				</a> 
				</div>

				<nav class="col--md-9 col-sm-9 col-xs-9"> <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>

<!--
					<ul id="lang_top">
						<li>

							<div id="google_translate_element"></div>
							<script type="text/javascript">
								function googleTranslateElementInit() {
									new google.translate.TranslateElement( {
										pageLanguage: 'en',
										layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
										autoDisplay: true
									}, 'google_translate_element' );
								}
							</script>
							<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


							<div id="google_translate_element"></div>
							
						</li>
						<li><a href="#">FR</a>
						</li>
						<li><a href="#">KS</a>

						</li>
					</ul>
-->



					<div class="main-menu">
						<div id="header_menu"> <img src="<?= base_url('asset/images/MHO-Hotels-150.png'); ?>" alt="" data-retina="true">

						</div>

						<a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
						
						<ul>
							<li>
								<a href="<?= base_url();?>">Home</a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">About<i class="icon-down-open-mini"></i></a>
								<!--							<a href="<?= base_url('About-Us');?>">About</a>-->
								
								<ul>
									<li><a href="<?= base_url('About-Us');?>">About Us and Mission</a>
									</li>
									<li><a href="<?= base_url('Executive-Team');?>">Executive Team</a>
									</li>
									<li><a href="<?= base_url('Management-Team');?>">Management Team</a>
									</li>
									<li><a href="<?= base_url('MHO-Friends');?>">MHO Friends</a>
									</li>
									<li><a href="<?= base_url('Industry-Leaders');?>">Industry Leaders</a>
									</li>
									<li><a href="<?= base_url('Franchisee-Advisory-Board');?>">Franchisee Advisory Board</a>
									</li>
								</ul>
							
							</li>
							<li><a href="<?= base_url('HOOur-Brands');?>">Our Brands</a>
							</li>
							<li><a href="<?= base_url('Fees'); ?>">Fees</a>
							</li>
							<li><a href="<?= base_url('Independent-Hotels'); ?>">Independent Hotels</a>
							</li>
							<li><a href="<?= base_url('Testimonials'); ?>">Testimonials</a>
							</li>
							<li><a href="<?= base_url('News'); ?>">News</a>
							</li>
							<li><a href="<?= base_url('Contact-Us'); ?>">Contact Us</a>
							</li>




							<?php
							$sessionDetail = $this->session->userdata( 'userdata' );
							@$uid = $sessionDetail[ 'id' ];
							@$uname = $sessionDetail[ 'user_name' ];
							@$uemail = $sessionDetail[ 'user_email' ];
							if ( isset( $uname ) && !empty( $uname ) ) {
								echo "<li><a href='#'>Hello " . $uname . "</a></li>";
								?>
							<li><a href="<?= base_url('Owner-Dashboard/').$uid; ?>">Owner Dashboard</a>
							</li>
							<li><a href="<?= base_url('Change-Password/').$uid; ?>">Change Password</a>
							</li>
							<li><a href="<?= base_url('logout') ?>">Logout</a>
								<?php
								} else {
									?>
								<li><a href="<?= base_url('Users-Login'); ?>">Owner Login</a>
									<!-- /Sign In -->
								</li>
								<!--								<li><a href="<?= base_url('Owner-Register'); ?>" class="btn btn-primary">Register</a>-->

							</li>
							<?php
							}
							?>

							<li><a href="<?= base_url('Enquire') ?>">Enquire about Membership</a>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="show-submenu">Sponsors<i class="icon-down-open-mini"></i></a>
								<ul>
									<li><a href="<?= base_url('Current-Sponsors');?>">Current Sponsors</a>
									</li>
									<li><a href="<?= base_url('Join-Sponsors-Program');?>">Join Sponsors Program</a>
									</li>
									
								</ul>
							
							</li>
							<li><a href="<?= base_url('Feedback') ?>">Feedback</a>
							</li>
							<li><a href="<?= base_url('Events') ?>">Events</a>
							</li>


						</ul>

					</div>

					<!-- End main-menu -->
				</nav>
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->
	</header>
	<!-- End Header =============================================== -->
