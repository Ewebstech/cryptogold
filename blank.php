<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>CryptoWealth | Blank </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
     <link href="../../../../../../fonts.googleapis.com/css69f2.css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> 
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/css/icofont.css">	
    <!-- font awesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">	
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
	<!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />	
   <?php include("includes/header.inc.php"); ?>
	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section id="page-banner">
		<div class="single-page-title-area overlay" data-background="assets/img/bg/slide1.jpg">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="single-page-title">
							<h2>About Us</h2>
							<p>CryptoWealth Investments</p>
						</div>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
		<div class="single-page-title-area-bottom">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">About us</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	 
    <!-- END PROMO SECTION -->
	
	<!-- START PRICETABLE SECTION -->
    <section id="pricetable" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<h5>Bitfonix conversation</h5>
						<h3>Trade Bitcoin <span>With Us</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="table-responsive">
						<table class="bitland-table bitland-table-2 table">
							<thead>
								<tr>
									<th scope="col">Cryptocurrency</th>
									<th scope="col">Price</th>
									<th scope="col">Supppy</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-baht"></i> Bitcoin</th>
									<td>85.78$</td>
									<td>427BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-dollar"></i> Bitfonix</th>
									<td>97.45$</td>
									<td>492BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="fas fa-shekel-sign"></i> Degitalcash</th>
									<td>45.89$</td>
									<td>635BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-euro-true"></i> Ethereum</th>
									<td>78.35$</td>
									<td>395BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-dollar-plus"></i> Stellar</th>
									<td>45.89$</td>
									<td>829BTC</td>
								</tr>
								<tr>
									<th scope="row"><i class="icofont icofont-cur-renminbi-true"></i> Ripple</th>
									<td>76.28$</td>
									<td>623BTC</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="cal-convertor">
							<script>
								baseUrl = "https://widgets.cryptocompare.com/";
								var scripts = document.getElementsByTagName("script");
								var embedder = scripts[ scripts.length - 1 ];
								(function (){
								var appName = encodeURIComponent(window.location.hostname);
								if(appName==""){appName="local";}
								var s = document.createElement("script");
								s.type = "text/javascript";
								s.async = true;
								var theUrl = baseUrl+'serve/v1/coin/chart?fsym=BTC&tsym=USD';
								s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
								embedder.parentNode.appendChild(s);
								})();
							</script>
						</div>		
				</div>
				<!-- end col -->				
			</div>	
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PRICETABLE SECTION -->

    <!-- START CALLTOACTION SECTION -->
	<section id="calltoaction" class="calltoaction-padding section-padding bg-theme">
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="calltoaction-two-wrap">
						<h4>Still have questions?</h4>
						<p>It's okay, simply go to our contact page and feel free to ask any questions there.</p>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 text-lg-right text-md-right text-sm-left text-left">
					<a href="/contact" class="btn-style btn-border btn-border-3">Contact Us</a>
				</div>
				<!-- end col -->
			</div>
			<!-- end row-->
		</div>
	</section>
    <!-- END CALLTOACTION SECTION -->

		<?php include("includes/footer.inc.php"); ?>
</body>

</html>