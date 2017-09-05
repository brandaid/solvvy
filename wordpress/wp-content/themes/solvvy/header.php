<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?> | <?php bloginfo('title' ); ?></title>

	<meta name="revisit-after" content="30 days">
	<meta name="robots" content="index,follow">
	<meta name="distribution" content="global">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sm-core-css.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sm-clean.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="loader"></div>
		<header class="header">

			<section class="header-top">
				<div class="container">
					<ul>
						<li><a href="">Contact Us</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Support</a></li>
						<li><a href="">Pricing</a></li>
						<li><a href="" class="login">Login</a></li>
					</ul>
				</div>
			</section>


			<section class="header-bottom">
				<div class="container">

					<nav class="main-nav" role="navigation">
						<!-- Mobile menu toggle button (hamburger/x icon) -->
						<input id="main-menu-state" type="checkbox" />
						<label class="main-menu-btn" for="main-menu-state">
							<span class="main-menu-btn-icon"></span>
							Toggle main menu visibility
						</label>

						<div class="nav-brand">
							<a href=""><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt=""></a>
						</div>

						<!-- Sample menu definition -->
						<ul id="main-menu" class="sm sm-clean">
							<li><a href="#">Solutions</a>
								<ul>
									<li>
										<a href="#">FOR YOUR ROLE</a>
										<ul>
											<li><a href="#">Support</a></li>
											<li><a href="#">Customer Experience</a></li>
											<li><a href="#">Finance</a></li>
										</ul>
									</li>
									<li>
										<a href="#">FOR YOUR ROLE</a>
										<ul>
											<li><a href="#">Support</a></li>
											<li><a href="#">Customer Experience</a></li>
											<li><a href="#">Finance</a></li>
										</ul>
									</li>
									<li>
										<a href="#">FOR YOUR ROLE</a>
										<ul>
											<li><a href="#">Support</a></li>
											<li><a href="#">Customer Experience</a></li>
											<li><a href="#">Finance</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="">Software</a></li>
							<li><a href="">Customers</a></li>
							<li><a href="">Resources</a></li>
							<li><a href="">Company</a>
								<ul>
									<li><a href="">Premium support</a></li>
								</ul>
							</li>
							<li class="demo"><a href="#">DEMO</a></li>
							<li class="search"><a href="">P</a></li>
							<li class="top-menu">
								<div class="menu-top-clone"></div>
							</li>
						</ul>
					</nav>

				</div>
			</section>

				
			




			<?php/*
			<section class="header-top">
				<div class="container">
					<ul>
						<li><a href="">Contact Us</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Support</a></li>
						<li><a href="">Pricing</a></li>
						<li><a href="" class="login">Login</a></li>
					</ul>
				</div>
			</section>




			<section  class="header-bottom">
				<div class="container">


				<nav class="main-nav" role="navigation">

					<!-- Mobile menu toggle button (hamburger/x icon) -->
					<input id="main-menu-state" type="checkbox" />
					<label class="main-menu-btn" for="main-menu-state">
					<span class="main-menu-btn-icon"></span> Toggle main menu visibility
					</label>


					<div class="nav-brand">
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt=""></a>
					</div>

				  <!-- Sample menu definition -->
				  <ul id="main-menu" class="sm sm-clean">
				    <li>
				    	<a href="">Solutions</a>
							<ul>
								<li>
									<div>
										<h4>FOR YOUR ROLE</h4>
										<div><a href="">Support</a></div>
										<div><a href="">Customer Experience</a></div>
										<div><a href="">Finance</a></div>
									</div>
								</li>
								<li>
									<div>
										<h4>FOR YOUR BUSINESS TYPE</h4>
										<div><a href="">B2B</a></div>
										<div><a href="">B2D</a></div>
										<div><a href="">B2C</a></div>
									</div>
								</li>
								<li>
									<div>
										<h4>FOR YOUR INDUSTRY</h4>
										<div><a href="">Tech</a></div>
										<div><a href="">Health & Beaty</a></div>
										<div><a href="">Food & Beverage</a></div>
										<div><a href="">Gaming</a></div>
										<div><a href="">Financial Services</a></div>
										<div><a href="">Fundraising</a></div>
									</div>
								</li>
								<li>
									<div>
										<h4>LATEST REPORT</h4>
										<p>Bacon ipsum dolor amet salami shankie bacon beef ioin doner.</p>
										<img src="<?php bloginfo('template_url'); ?>/images/hero-image.jpg" alt="" height="100">
									</div>
								</li>
							</ul>
			    	</li>
				    <li><a href="">Software</a></li>
				    <li><a href="">Customers</a></li>
				    <li><a href="">Resources</a></li>
				    <li>
				    	<a href="">Company</a>
						<ul>
						    <li><a href="http://www.smartmenus.org/support/premium-support/">Premium support</a></li>
						    <li><a href="http://www.smartmenus.org/support/forums/">Forums</a></li>
						  </ul>
						</li>
				    <li class="demo"><a href="" class="button">Demo</a></li>
				    <li class="search"><a href="" class="fa fa-search"></a></li>
				  </ul>
				</nav>


				</div>
			</section>
			*/?>


	










		<?php/*
		<section class="header-bottom">
			<div class="container">
				<div class="col-brand">
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt=""></a>
				</div>
				<div class="col-nav">
					<nav>
						<ul class="menu">
							<li><a href="">Solutions</a>
								<div>
									<ul>
										<h4>FOR YOUR ROLE</h4>
										<li><a href="">Support</a></li>
										<li><a href="">Customer Experience</a></li>
										<li><a href="">Finance</a></li>
									</ul>
									<ul>
										<h4>FOR YOUR BUSINESS TYPE</h4>
										<li><a href="">B2B</a></li>
										<li><a href="">B2D</a></li>
										<li><a href="">B2C</a></li>
									</ul>
									<ul>
										<h4>FOR YOUR INDUSTRY</h4>
										<li><a href="">Tech</a></li>
										<li><a href="">Health & Beaty</a></li>
										<li><a href="">Food & Beverage</a></li>
										<li><a href="">Gaming</a></li>
										<li><a href="">Financial Services</a></li>
										<li><a href="">Fundraising</a></li>
									</ul>
									<ul>
										<li>
											<div>
												<h4>LATEST REPORT</h4>
												<p>Bacon ipsum dolor amet salami shankie bacon beef ioin doner.</p>
												<img src="<?php bloginfo('template_url'); ?>/images/hero-image.jpg" alt="" height="100">
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="">Software</a></li>
							<li><a href="">Customers</a></li>
							<li><a href="">Resources</a></li>
							<li><a href="">Company</a></li>
							<li><a href="">Demo</a></li>
							<li><a href="">P</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		*/?>

	</header>
	<main>