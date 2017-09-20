
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
			
			<?php $footerButtons = get_field('footer_buttons', 'option') ?>		

			<?php if($footerButtons){ ?>
			<div class="col col-5">
				<div>
					<?php if($footerButtons['pink_button']){ ?><a href="<?php echo $footerButtons['pink_button']['url']; ?>" target="<?php echo $footerButtons['pink_button']['target']; ?>" class="button"><?php echo $footerButtons['pink_button']['title']; ?></a><?php } ?>
					<?php if($footerButtons['white_button']){ ?><a href="<?php echo $footerButtons['white_button']['url']; ?>" target="<?php echo $footerButtons['white_button']['target']; ?>" class="button white"><?php echo $footerButtons['white_button']['title']; ?></a><?php } ?>
				</div>
			</div>
			<?php } ?>
			<div class="col col-6"></div>
			<?php $companyInfo = get_field('company_info', 'option');
				  $socialMedia = get_field('social_media', 'option');
			 ?>
			
			<div class="col col-7 contact">
				<?php if($companyInfo['office_address_line_1'] || $companyInfo['office_phone_number'] || $companyInfo['contact_email']){ ?>
				<h4>Our Office</h4>
				<div>custom field</div>
				<ul>
					<li><?php echo $companyInfo['office_address_line_1'] ?></li>
					<li><?php echo $companyInfo['office_address_line_2'] ?></li>
					<li><?php echo $companyInfo['office_phone_number'] ?></li>
					<li><a href="mailto:<?php echo $companyInfo['contact_email'] ?>"><?php echo $companyInfo['contact_email'] ?></a></li>
				</ul>
				<?php } ?>
				<div class="social">
					<?php if($socialMedia['twitter']){ ?><a href="<?php echo $socialMedia['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php } ?>
					<?php if($socialMedia['linkedin']){ ?><a href="<?php echo $socialMedia['linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php } ?>
					<?php if($socialMedia['facebook']){ ?><a href="<?php echo $socialMedia['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>
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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bubbles.js"></script>
	<script type="text/javascript">
		(function($){
			var destArrBubb = [];
			bubblesArray.forEach(function(item, index, origarr){
				var singleBubble = new Bubble({
					bk : "#F6639A",
					percent : item.bubble_percent,
					title : item.bubble_title,
					position : {
						x : 0,
						y : 0
					}
				});
				destArrBubb.push(singleBubble);
			});
			//console.log(destArrBubb);

			var scene = new BubbleScene({
				container : '#bubbles-scene',
				elements : destArrBubb
			});

			scene.draw();
		})(jQuery)

		
		
	</script>
	<?php wp_footer(); ?>


<!-- MODAL SEARCH -->
	<div id="st-results-container"></div>
	<script type="text/javascript">
	  var Swiftype = window.Swiftype || {};
	  (function() {
	    Swiftype.key = 'gUg6G9puciC_Pvq6ZQ7G';
	    Swiftype.inputElement = '#st-search-input';
	    Swiftype.resultContainingElement = '#st-results-container';
	    Swiftype.attachElement = '#st-search-input';
	    Swiftype.renderStyle = "overlay";

	    var script = document.createElement('script');
	    script.type = 'text/javascript';
	    script.async = true;
	    script.src = "//s.swiftypecdn.com/embed.js";
	    var entry = document.getElementsByTagName('script')[0];
	    entry.parentNode.insertBefore(script, entry);
	  }());
	</script>
	<!-- END MODAL SEARCH -->

</body>
</html>