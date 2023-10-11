

<!DOCTYPE html>


<html dir="ltr" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Safe and Swift">
<link href="assets/images/favicon/favicon.png" rel="icon">

<!-- Fonts
    ============================================= -->
<link href="http://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600,600i,700%7CRoboto:300i,400,400i,500,500i,700" rel="stylesheet" type="text/css">

<!-- Stylesheets ============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css"> 

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Elitekeychain| Secure, fast and instant</title>

</head>
<body>
<div class="preloader">
	<div class="signal"></div>
</div><!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-2 header-topbar header-light header-fixed">
	<div id="top-bar" class="top-bar bitcoin-tracker-dark">
<div class="container-fluid pr-0 pl-0">
		<div class="row clearfix">
		<div class="topbarBitcoinTracker"></div>
		</div><!-- .row end -->
	</div><!-- .container end -->
</div>
	<nav id="primary-menu" class="navbar navbar-fixed-top" style="background-color:#f2f2f2;">
		<div class="container">
			<div class="">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="logo" href="index.php">
					<img class="logo-light" src="assets/images/logo/logo-light.png" alt="enrmous Logo" style="height:100px; width: 100px;">
					<img class="logo-dark" src="assets/images/logo/logo-dark1.jpeg" alt="enrmous Logo" style="height:60px; width: 110px; margin-left:10px;">
				</a>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
	<ul class="nav navbar-nav nav-pos-right navbar-left">
				<!-- Home Menu-->
				<li class="active">
					<a href="index.php" >Home</a>

				</li>
				<!-- li end -->

				<!-- Pages Menu -->
				<li class=""> 
					<a href="about.php" >About Us</a>

				</li>
		
				<li class=""> 
					<a href="market.php" >Market</a>

				</li>
				
				<li class=""> 
					<a href="security.php" >Security</a>

				</li>
				
				<!--<li class="has-dropdown"> -->
				<!--	<a href="career.php" >Career</a>-->

				<!--</li>-->
				<!-- li end -->
				<!-- Features Menu-->
				<li class="">
					<a href="contact.php">Contact us</a>
				
						</li>
			 
						<li class="">
							<a href="faq.php">Faqs</a>
			              
						</li>					
			

     </ul>

<!-- Module Consultation  -->
<div class="module module-consultation pull-left">
	<a class="btn btn--secondary btn--bordered btn--rounded" href="backend/register.php"  style="background-color: orange;">Login</a>
</div>

<!-- Module Signup  -->

	</div>
			<!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>







<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
	<div class="bg-section">
		<img src="assets/images/page-titles/5.jpg" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="title title-6 text-center">
                    <div class="title--heading">
                        <h1>contact Us</h1>
                    </div>
					<div class="clearfix"></div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active" style="color:orange;">Contact us</li>
					</ol>
				</div><!-- .title end -->
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #page-title end -->





<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 pt-90 pb-90">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-3 mb-50 text--center">
					<h2 class="heading--title">Get in touch</h2>
				</div>
			</div><!-- .col-md-6 end -->
		</div><!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
				<div class="row">



                          <?php

                                    $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                      if(strpos($url, 'empty') == true){

                                        echo "<p style='color:red; text-align:center; font-size:15px;'> Please fill out all fields. </p>";
                                      }

                                      if(strpos($url, 'invalidemail') == true){

                                        echo "<p style='color:red; text-align:center; font-size:15px;'> <i class=' fas fa-user-alt-slash'></i>Invalid email, check your email address.</p>";
                                      }



                                      if(strpos($url, 'sucess') == true){

                                        echo "<p style='color:green; text-align:center; font-size:15px;'> Email successfully sent <a href='backend/login.php' style='color:blue;'>Login. </p>";
                                      }

                                       if(strpos($url, 'error') == true){

                                        echo "<p style='color:red; text-align:center; font-size:15px;'> An error occured check back later</p>";
                                      }
 
                            ?>
				<form class="mb-0" action="backend/actions/contactform.php" method="post">
					<div class="col-xs-12 col-sm-12 col-md-4">
							<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required="">
						</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<input type="text" class="form-control" name="sub" id="Phone" placeholder="Subject">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
							<textarea class="form-control" name="msg" id="message" rows="2" placeholder="Request Details:"></textarea>
						</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
							<input type="submit" value="Submit Request" name="Send" class="btn btn--primary btn--block">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="contact-result"></div>
                            </div>
				</form>
				<!-- form end -->
				</div>
			</div>
        </div><!-- .row end -->
	</div><!-- .container end -->
</section>
<!-- #contact1 end -->







	
	<!-- Copyrights
	============================================= -->
	<div class="footer--bar">
		<div class="container">
			<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text--center footer--copyright">
                    <div class="payment--methods text--center">
                        <a href="#" title="Visa"><img src="assets/images/footer/visa.png" alt="Visa"></a>
                        <a href="#" title="Mastercard"><img src="assets/images/footer/mastercard.png" alt="Mastercard"></a>
                        <a href="#" title="amex"> <img src="assets/images/footer/amex.png" alt="amex"></a>
                        <a href="#" title="Delta"><img src="assets/images/footer/delta.png" alt="Delta"> </a>
                        <a href="#" title="Cirrus"><img src="assets/images/footer/cirrus.png" alt="Cirrus"></a>
                        <a href="#" title="Paypal"><img src="assets/images/footer/paypal.png" alt="Paypal"></a>
                    </div>
                </div>
 			</div>
		</div><!-- .container end -->
	</div><!-- .footer-copyright end -->
</footer>


<div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
</div><!-- #wrapper end -->















<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/bitcoinTracker.js"></script>
<script src="assets/js/bitcoinPrice.js"></script>
<script src="assets/js/bitcoinPriceWidgets.js"></script>
<script src="assets/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- RS Configration JS Files -->
<script src="assets/js/rsconfig.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/621236771ffac05b1d7ac876/1fsbi9hss';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
