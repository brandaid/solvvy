<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php if ( is_home() || is_front_page()) { ?><?php bloginfo('title' ); ?> <?php } else { ?> <?php wp_title(''); ?> | <?php bloginfo('title' ); ?><?php } ?></title>

	<meta name="revisit-after" content="30 days">
	<meta name="robots" content="index,follow">
	<meta name="distribution" content="global">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5XGWG3D');</script>
	<!-- End Google Tag Manager -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sm-core-css.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sm-clean.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cytoscape.js"></script>
	<script src="//app-ab24.marketo.com/js/forms2/js/forms2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
	(function() {
	  var didInit = false;
	  function initMunchkin() {
	    if(didInit === false) {
	      didInit = true;
	      Munchkin.init('733-WJM-922');
	    }
	  }
	  var s = document.createElement('script');
	  s.type = 'text/javascript';
	  s.async = true;
	  s.src = '//munchkin.marketo.net/munchkin.js';
	  s.onreadystatechange = function() {
	    if (this.readyState == 'complete' || this.readyState == 'loaded') {
	      initMunchkin();
	    }
	  };
	  s.onload = initMunchkin;
	  document.getElementsByTagName('head')[0].appendChild(s);
	})();
	</script>

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XGWG3D"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="loader">
		<div class="loading">
			<div class="animation"><div class="circle one"></div></div>
			<div class="animation"><div class="circle two"></div></div>
			<div class="animation"><div class="circle three"></div></div>
			<div class="animation"><div class="circle four"></div></div>
			<div class="animation"><div class="circle five"></div></div>
		</div>
	</div>

	<div id="search_modal" style="display: none;"></div>
	
		<header class="header">

			<section class="header-top">
				<div class="<!--  -->ontainer">
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

						<?php/*
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
						*/?>


						<?php $latest_report = get_field('latest_report', 'option'); ?>
						<div style="display: none;">
							<div id="get-post">
								<h4>LATEST WHITEPAPER</h4>
								<?php if( $latest_report['latest_title'] ) { ?>
								<p>
									<a href="<?php echo $latest_report['latest_read_more']; ?>" title="<?php the_title_attribute(); ?>" target="<?php echo $latest_report['latest_target']; ?>">
									 	<?php echo $latest_report['latest_title']; ?>
									</a>
								</p>		
								<?php } ?>						
								<?php if( $latest_report['latest_image'] ){ ?>
									<a href="<?php echo $latest_report['latest_read_more']; ?>" target="<?php echo $latest_report['latest_target']; ?>">
										<img src="<?php echo $latest_report['latest_image'] ?>"/>
									</a>
								<?php } ?>
								<div>
									<a class="button" href="<?php echo $latest_report['latest_read_more'];  ?>" target="<?php echo $latest_report['latest_target']; ?>"><?php echo $latest_report['latest_link']; ?>
									</a>
								</div>
							</div>
						</div>

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