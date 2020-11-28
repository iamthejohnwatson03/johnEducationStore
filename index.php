<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>John Education Videos</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>

	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
<body>
	<!-- Part 1 from OG website -->
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/logo.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To John's Educational Videos</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>We Believe in deliverance with Passion.</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#service">Let's Get Started</a>
		</div>
	</header>

	<!-- Part 2 from OG website -->
	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<li><a href="#header">Home</a></li>
				<li><a href="#service">Services</a></li>
				<li><a href="#Portfolio">Portfolio</a></li>
				<li><a href="#client">Clients</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>

	<!-- PARt 3 STARTS -->
	<section class="main-section" id="service">
		<!--main-section-start-->
		<div class="container">
			<h2>Services</h2>
			<h6>We offer Test Prep service with Monthly/Yearly Subscription.</h6>
			<div class="row">
				<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
					<div class="service-list">
						<div class="service-list-col1">

						</div>
						<div class="service-list-col2">
							<h3>branding &amp; identity</h3>
							<p>Look out for our courses on branding &amp; identity .</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
						</div>
						<div class="service-list-col2">
							<h3>web development</h3>
							<p>Look out for our courses on web development .</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
						</div>
						<div class="service-list-col2">
							<h3>Photography and Videography</h3>
							<p>Look out for our courses on Photography and Videography</p>
						</div>
					</div>
					<div class="service-list">
						<div class="service-list-col1">
						</div>
						<div class="service-list-col2">
							<h3>24/7 Support</h3>
							<p>Raise a ticket and we are happy to serve you !

							</p>
						</div>
					</div>
				</div>
				<figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
					<img src="img/macbook-pro.png" alt="">
				</figure>

			</div>
		</div>
	</section>
	<!--main-section-end-->
	<!-- PART 3 ENDS -->



<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">John's Education Library !</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Courses</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<!--<div id="get_category">
				</div>
				
				<div id="get_brand">
				</div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; 2020</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


<!-- End parts here -->
<section class="main-section client-part" id="client">
		<!--main-section client-part-start-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at John's Learning courses. They made sure we were well educated and efficient all the time!</p>
				</div>
			</div>
			<ul class="client wow fadeIn delay-05s">
				<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>Timothy Charles</h3>
                <span>Senior Developer at Apple.</span>
            </a></li>
			</ul>
		</div>
	</section>

	<div class="c-logo-part">
		<!--c-logo-part-start-->
		<div class="container">
			<ul>
				<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
				<li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
			</ul>
		</div>
	</div>

		<!--c-logo-part-end-->
		<section class="main-section team" id="team">
		<!--main-section team-start-->
		<div class="container">
			<h2>team</h2>
			<h6>Take a closer look into our amazing team. We won’t bite.</h6>
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic1.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">John Wayne </h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Welcome to my learning website I offer courses of all types for your advancement and we are better than anyone else out there !.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic2.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Jay Boltman</h3>
					<span class="wow fadeInDown delay-06s">HR  Manager</span>
					<p class="wow fadeInDown delay-06s">Any HR stuff - you come to me !.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="#"></a></div>
						<img src="img/team-leader-pic3.jpg" alt="">
						<ul>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Lucy Loo</h3>
					<span class="wow fadeInDown delay-09s">SEO Genius</span>
					<p class="wow fadeInDown delay-09s">My name is as easy as my task - but I am real good at it !</p>
				</div>
			</div>
		</div>
	</section>
	<!--main-section team-end-->


	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Let’s Talk Business.</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container">
		<section class="main-section contact" id="contact">

			<div class="row">
				<div class="col-lg-6 col-sm-7 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						<h3><i class=" icon-map-marker"></i>Address:</h3>
						<span>Roxbury Crossing,CA, 123456.</span>
					</div>
					<div class="contact-info-box phone clearfix">
						<h3></i>Phone:</h3>
						<span>1-800-BOO-YAHH</span>
					</div>
					<div class="contact-info-box email clearfix">
						<h3></i>email:</h3>
						<span>hello@johnwatson.com</span>
					</div>
					<div class="contact-info-box hours clearfix">
						<h3></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
					</div>
					
				</div>
				<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
					<div class="form">

						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control input-text text-area" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="input-btn">Send Message</button></div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>


	<footer class="footer">
		<div class="container">
			<div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
			<span class="copyright">&copy; John's Educational Videos Theme. All Rights Reserved</span>
			<div class="credits">
				
				enchanced by using <a href="https://getbootstrap.com//">Bootstrap</a>
			</div>
		</div>
	</footer>



</body>
</html>
















































