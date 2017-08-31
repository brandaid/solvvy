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
					<li><a href="">Login</a></li>
				</ul>
			</div>
		</section>
		<section class="header-bottom">
			<div class="container">
				<div class="col-brand">
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt=""></a>
				</div>
				<div class="col-nav">
					<nav>
						<ul>
							<li><a href="">Solutions</a>
								<div class="submenu">
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
												<img src="" alt="">
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
						</ul>
					</nav>
				</div>
			</div>
		</section>
	</header>
	<main>