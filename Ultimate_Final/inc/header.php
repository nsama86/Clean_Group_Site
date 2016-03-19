<!DOCTYPE html>

<html>

	<head>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title>Kent Food Bank & Emergency Services</title>

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon1.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/icon.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icon.png">
		 <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icon.png">

		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/fontello.css" rel="stylesheet" type="text/css">
		<link href="css/flexslider.css" rel="stylesheet" type="text/css">
		<link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="css/responsive-calendar.css" rel="stylesheet" type="text/css">
		<link href="css/chosen.css" rel="stylesheet" type="text/css">
		<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
		<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css">


		<!--[if IE 9]>
			<link rel="stylesheet" href="css/ie9.css">
		<![endif]-->

		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<link href="css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="css/ie.css">
        <![endif]-->

		<!--[if gt IE 8]>
			<link href="css/jackbox-ie9.css" rel="stylesheet" type="text/css" />
		<![endif]-->

		<!--[if IE 7]>
			<link rel="stylesheet" href="css/fontello-ie7.css">
		<![endif]-->

		<style type="text/css">
			.no-fouc {display:none;}
	  	</style>

		<!-- jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui-1.10.4.min.js"></script>

		<!-- Preloader -->
		<script src="js/jquery.queryloader2.min.js"></script>

		<script type="text/javascript">
		$('html').addClass('no-fouc');

		$(document).ready(function(){

			$('html').show();

			var window_w = $(window).width();
			var window_h = $(window).height();
			var window_s = $(window).scrollTop();

			$("body").queryLoader2({
				backgroundColor: '#f2f4f9',
				barColor: '#63b2f5',
				barHeight: 4,
				percentage:false,
				deepSearch:true,
				minimumTime:300,
				onComplete: function(){

					$('.animate-onscroll').filter(function(index){

						return this.offsetTop < (window_s + window_h);

					}).each(function(index, value){

						var el = $(this);
						var el_y = $(this).offset().top;

						if((window_s) > el_y){
							$(el).addClass('animated fadeInDown').removeClass('animate-onscroll');
							setTimeout(function(){
								$(el).css('opacity','1').removeClass('animated fadeInDown');
							},600);
						}

					});

				}
			});

		});
		</script>

	</head>

	<body class="sticky-header-on tablet-sticky-header">

    <!-- javascript code from facebook to setup facebook feed -->
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- end of facebook feed -->


	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<!-- Container -->
		<div class="container">

			<!-- Header -->
			<header id="header" class="animate-onscroll">

				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div id="logo" class="col-lg-2 col-md-2 col-sm-12">
                                <!--<div><h4>Kent Food Bank <br>& Emergency Services</h4></div>-->
                                <a href="index.php"><img src="img/icon.png" alt="Kent Food Bank & Emergency Services"></a>
                            </div>
                            <!-- /Logo -->

                            <!-- Main Quote -->
                            <div class="col-lg-10 col-md-10 col-sm-12" id="header-title">
										 <h1>Kent Food Bank <span class="orange">&</span> Emergency Services</h1>
 										<div class="header-tagline text-center">Serving low-income residents of the Kent School District</div>
                            </div>
                            <!-- /Main Quote -->
                        </div>
					</div>
				</div>
				<!-- /Main Header -->


				<!-- Lower Header -->
				<div id="lower-header">
					<div class="container">
                        <div id="menu-button">
                            <div>
                            <span></span>
                            <span></span>
                            <span></span>
                            </div>
                            <span>Menu</span>
                        </div>

<?php // Get page name so we can display the proper active link
	$currentPage = basename($_SERVER['PHP_SELF']);
?>
                        <ul id="navigation">

                            <!-- Home -->
                            <li <?php if($currentPage == "index.php") echo 'class="current-menu-item"'; ?>>
                                <a href="index.php"><i class="icons icon-home"></i>Home</a>
                            </li>
                            <!-- /Home -->

                            <!-- About Us -->
                            <li <?php if($currentPage == "about.php") echo 'class="current-menu-item"'; ?>>
                                <span><i class="icons icon-users"></i>About Us</span>
								<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="history.php">Our Story</a></li>
								<li><a href="mission.php">Our Mission</a></li>
								</ul>
                            </li>
                            <!-- /About Us -->

                            <!-- Need Help -->
                            <li <?php if($currentPage == "service-v1_hawks_edit.php") echo 'class="current-menu-item"'; ?>>
                                <span><i class="icons icon-food"></i>Need Help</span>
								<ul>
								<li><a href="services.php">Get Help</a></li>
								<li><a href="foodbank.php">Food Bank</a></li>
								<li><a href="clothingbank.php">Clothing Bank</a></li>
								<li><a href="birchcreek.php">Birch Creek Annex</a></li>
								<li><a href="otherhelp.php">Additional Resources</a></li>
								<li><a href="parking.php">Parking Tips</a></li>
								</ul>
                            </li>
                            <!-- /Need Help -->

                            <!-- Donate -->
                            <li <?php if($currentPage == "donate.php") echo 'class="current-menu-item"'; ?>>
								<span><i class="icons icon-heart"></i>Donate</span>
                                <ul>
								<li><a href="apply.php">Donate Time</a></li>
								<li><a href="inperson.php">Donate in Person</a></li>
								<li><a href="online.php">Donate Online</a></li>
								<li><a href="partners.php">Donate with Partners</a></li>
								<li><a href="sponsorshipbreakfast.php">Annual Breakfast</a></li>
								<li><a href="parking.php">Parking Tips</a></li>
								</ul>
                            </li>
                            <!-- /Donate -->

							 <!-- Contact -->
                            <li <?php if($currentPage == "contact.php") echo 'class="current-menu-item"'; ?>>
                                <a href="contact.php"><i class="icons icon-mail-alt"></i>Contact Us</a>
                            </li>
                            <!-- /Contact -->
                        </ul>
					</div>
				</div>
				<!-- /Lower Header -->
			</header>

			<!-- /Header -->
<!-- Database connection -->
<?php require_once('../db.php'); ?>
