<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php if ( is_home() || is_front_page()) { ?><?php bloginfo('title' ); ?> <?php } else { ?> <?php wp_title(); ?> | <?php bloginfo('title' ); ?><?php } ?></title>

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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cytoscape.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="loader">
		<div class="loading">
			<div class="animation"><div class="circle one"></div></div>
			<div class="animation"><div class="circle two"></div></div>
			<div class="animation"><div class="circle three"></div></div>
			<div class="animation"><div class="circle four"></div></div>
			<div class="animation"><div class="circle five"></div></div>
		</div>
	</div>
		<header class="header">

			<section class="header-top">
				<div class="container">
					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'header-menu' ) 
						);
					?>
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
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt=""></a>
						</div>

						<?php
						$args = array(
							'posts_per_page' => 1,
							'cat' => 'solvvy'
						);
						$q = new WP_Query( $args);

						if ( $q->have_posts() ) {
							while ( $q->have_posts() ) {
								$q->the_post();
								$size = 'medium';
								?>
									<div style="display: none;">
										<div id="get-post">
											<h4>LATEST REPORT</h4>
											<p>
												<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
													<?php the_title(); ?>
												</a>
											</p>
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<img src="<?php the_post_thumbnail_url( $size ); ?>"/>
											</a>
											<div><a class="button" href="<?php the_permalink(); ?>">Read Now</a></div>
										</div>
									</div>
								<?php
								}
							wp_reset_postdata();
						}
						?>

						<!-- Sample menu definition -->
						<?php wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'=>false,
								'menu_class' => 'sm sm-clean',
								'menu_id' => 'main-menu'
							)
						); ?>
					</nav>

				</div>
			</section>

	</header>
	<main>