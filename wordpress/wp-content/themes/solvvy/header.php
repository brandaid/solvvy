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
										<a href="#">FOR YOUR BUSINNES TYPE</a>
										<ul>
											<li><a href="#">B2B</a></li>
											<li><a href="#">B2D</a></li>
											<li><a href="#">B2C</a></li>
										</ul>
									</li>
									<li>
										<a href="#">FOR YOUR INDUSTRY</a>
										<ul>
											<li><a href="#">Tech</a></li>
											<li><a href="#">Health & Beauty</a></li>
											<li><a href="#">Food & Beverage</a></li>
											<li><a href="#">Gaming</a></li>
											<li><a href="#">Financial Services</a></li>
											<li><a href="#">Fundraising</a></li>
										</ul>
									</li>
									<li class="menu-post last-post">
										<div>
											<a href=""><h4>LATEST REPORT A</h4></a>
											<p>Bacon ipsum dolor amet salami shankie bacon beef ioin doner.</p>
											<a href=""><img src="<?php bloginfo('template_url'); ?>/images/hero-image.jpg" alt="" ></a>
											<div><a class="button" href="#">Read Now</a></div>
										</div>
									</li>
								</ul>
							</li>
							<li><a href="">Software</a></li>
							<li><a href="">Customers</a></li>
							<li><a href="">Resources</a></li>
							<li><a href="#">Company</a>
								<ul>
									<li>
										<a href="#">Company Info</a>
										<ul>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Vision</a></li>
											<li><a href="#">Leadership</a></li>
											<li><a href="#">Contact Us</a></li>
											<li><a href="#">Careers</a></li>
										</ul>
									</li>
									<li>
										<a href="#">News & Events</a>
										<ul>
											<li><a href="#">News & Press Releases</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Newsletters</a></li>
											<li><a href="#">Awards & Recognition</a></li>
										</ul>
									</li>
									<li class="menu-post">
										<div>
											<a href=""><h4>LATEST REPORT</h4></a>
											<p>Bacon ipsum dolor amet salami shankie bacon beef ioin doner.</p>
											<a href=""><img src="<?php bloginfo('template_url'); ?>/images/hero-image.jpg" alt="" ></a>
											<div><a class="button" href="#">Read Now</a></div>
										</div>
									</li>
								</ul>
							</li>
							<li class="post">
								<div class="menu-post-clone"></div>
							</li>
							<li class="demo"><a class="button" href="#">DEMO</a></li>
							<li class="search">
								<form class="searchbox">
									<input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
									<input type="submit" class="searchbox-submit" value="&#xe80f">
									<span class="searchbox-icon"><span class="icon-search-2"></span></span>
								</form>
							</li>
							<li class="top-menu">
								<div class="menu-top-clone"></div>
							</li>
						</ul>
					</nav>

				</div>
			</section>

	</header>
	<main>