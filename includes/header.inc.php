<?php  
  require_once('app/Baseclass.php');


  use App\Classes\QueryClass;
  use App\Classes\Baseclass;

  $queryclass = new QueryClass();
  $baseclass = new Baseclass();

  ?>
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css" />	
    <!-- Style CSS --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="home-4">

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">CryptoWealth</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-1">
		<!-- START TOP AREA -->
		<div class="top-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 col-12">
						<div class="info-menu">
							<ul>
								<li><a href="#"><i class="fa fa-user"></i> Welcome to CryptoWealth Investments Platform</a></li>
							</ul>
						</div>
					</div>
					<!-- end col -->
					<div class="col-lg-4 col-md-12 col-sm-12 col-12">
						<div class="info-menu">
							<ul>
								<li><a href="#"><i class="icofont icofont-login"></i> Login </a></li>
								<li><a href="#"><i class="icofont icofont-user-alt-5"></i> Register </a></li>
								<li><a href="#"><i class="icofont icofont-hand-drag2"></i> Help </a></li>
								<li><a href="#"><i class="icofont icofont-live-support"></i> Support </a></li>
							</ul>
						</div>
					</div> 
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END TOP AREA -->

		<!-- START LOGO AREA -->
		<div class="logo-area">
			<div class="auto-container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-7 mx-auto pl-0 mb-lg-0 mb-5">
						<div class="logo">
							<a href="./">
							<span style="display: inline;"><img class="img-fluid" src="assets/img/crytologo.png"  style="max-height: 50px; display: inline;" alt=""></span>
							   <span style="display: inline; font-weight: bold;">CRYPTOWEALTH</span>
							</a>
						</div>
					</div>
					<!-- end col -->
					<div class="col-md-8 col-sm-6 col-12">
						<div class="header-info-box">
                            <div class="header-info-icon">
								<i class="fa fa-envelope-open"></i>
							</div>
							<p>Email Us</p>
                            <h6>info@cryptoweatlh.com</h6>
                        </div>
						<div class="header-info-box" style="margin-right: -10px !important;">
                            <div class="header-info-icon">
								<i class="icofont icofont-phone"></i>
							</div>
							<p>Call Us</p>
                            <h6>+234-813-391-8455</h6>
                        </div>
						<div class="header-info-box ml-2" style="float: right;">
                            <a href="#" class="quote-btn">Get Started <i class="icofont icofont-caret-right"></i></a>
                        </div>
					</div>
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END LOGO AREA -->

		<!-- START NAVIGATION AREA -->
		<div class="sticky-menu">
			<div class="mainmenu-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-9">
							<nav class="navbar navbar-expand-lg justify-content-left">
								<ul class="navbar-nav">
								   <li><a href="./" class="js-scroll-trigger active nav-link"><i class="fa fa-home"></i> Home</a>
									</li>	
									<li><a href="#abouthf" class="js-scroll-trigger nav-link"><i class="fa fa-exclamation-circle"></i> About</a></li>
									<li><a href="#service" class="js-scroll-trigger nav-link"><i class="fa fa-list"></i> Pricing</a></li>
									<li><a href="#team" class="js-scroll-trigger nav-link"><i class="fa fa-envelope"></i> Contact</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-lg-3 d-none d-lg-block d-md-none text-right pr-0">
							<form class="navbar-form">
								<div class="form-group">
									<input class="form-control" name="search" value="Search here..." type="text">
									<button type="submit" class="btn"><i class="fa fa-search-plus"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVIGATION AREA -->	
	</header>
	<!-- END HEADER SECTION -->