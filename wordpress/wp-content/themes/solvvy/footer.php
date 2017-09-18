
		<!-- BOX MAP -->

		<section class="box-map">
			<div class="container">
				<h2>Join The Thousands of Companies Using Solvvy</h2>
				<p>Signing up is fast, free and easy. Call us today at (650) 246-9685.</p>
				<a href="" class="button">Button</a>
				<a href="" class="button button-secondary">Button</a>
			</div>
		</section>
	</main>
	<footer class="footer">

		<div class="container col-brand">
			<div class="col">
				<img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt="">
			</div>
		</div>

		<div class="container links">
			<div class="col col-1">
				<h4>Solutions</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'fisrt-menu-footer' ) ); ?>
			</div>
			<div class="col col-2">

			<?php wp_nav_menu(
				array(
					'theme_location' => 'second-menu-footer',
					//'menu_class' => 'class',
					'before' => '<h4>',
					'after' => '</h4>'
				)
			); ?>
			</div>
			<div class="col col-3">
				<h4>Company</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'third-menu-footer' ) ); ?>
			</div>
			<div class="col col-4">
				<h4>Get in Touch</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'fourth-menu-footer' ) ); ?>
			</div>
			<div class="col col-5" style="background: yellow;">
				<div>custom field</div>
				<div>
					<a href="" class="button">LIVE DEMO</a>
					<a href="" class="button white">PRICING</a>
				</div>
			</div>
			<div class="col col-6"></div>
			<div class="col col-7 contact" style="background: yellow;">
				<h4>Our Office</h4>
				<div>custom field</div>
				<ul>
					<li>425 Sherman Ave.</li>
					<li>Palo Alto, CA 94301</li>
					<li>(650) 246-9685</li>
					<li><a href="mailto:info@solvvy.com">info@solvvy.com</a></li>
				</ul>
				<div class="social" style="background: yellow;">
					<?php/* if( !empty(get_field('facebook', 'option')) ) : ?>
						<li><a href="<?php the_field('facebook', 'option')?>" class="fa fa-facebook" target="blank"></a></li>
					<?php endif; */?>

					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>

		<div class="footer-end">
			<div class="container">
				<div class="legal">
					<div class="col col-1">
						<?php wp_nav_menu( array( 'theme_location' => 'terms-menu' ) ); ?>
					</div>
					<div class="col col-2">&copy; <?php echo date('Y'); ?> Solvvy, Inc. All rights reserved.</div>
				</div>
			</div>
		</div>

		<a href="#" class="scrollToTop"><i class="fa fa-chevron-up"></i></a>

	</footer>










	<!--JQUERY -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nice-select.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.smartmenus.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<?php wp_footer(); ?>


	<!-- Modal Search -->
	<div id="myModalSearch" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="videoWrapper">
				<iframe src="https://solvvy.mbzvrm4-liquidwebsites.com" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div>

</body>
</html>