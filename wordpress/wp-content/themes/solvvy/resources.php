<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Resources

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball">
			<div class="container">
				<h2>Featured Resources</h2>
<ul class="list-boxes-three three-ipad">
<?php
$args = array( 'post_type' => 'Resources');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
<?php if( get_field('featured_resource') ): ?>
<?php $terms = get_the_terms( $post->ID, 'resource-types' ); ?>
<li>
	<div class="fpo-resources">
		<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
		<h3><?php foreach( $terms as $term ) echo ' ' . $term->name . ': '; ?> <?php the_title();?></h3>
		<p> <?php the_content(); ?> </p>
		<a href="<?php the_field('button_link_destination') ?>" class="button" target="_blank"><?php the_field('button_text') ?></a>
	</div>
</li>
<?php endif; ?>
<? endwhile; ?>
				<ul class="list-boxes-three three-ipad">
					<li>
						<div class="fpo-resources">
							<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
							<h3>Lorem Ipsum Name</h3>
							<p>Bacon ipsum dolor amet fatback jerky brisket cupim boudin ham hock hamburger. </p>
							<a href="" class="button">Download Now</a>
						</div>
					</li>
					<li>
						<div class="fpo-resources">
							<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
							<h3>Lorem Ipsum Name</h3>
							<p>Bacon ipsum dolor amet fatback jerky brisket cupim boudin ham hock hamburger. </p>
							<a href="" class="button">Download Now</a>
						</div>
					</li>
					<li>
						<div class="fpo-resources">
							<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
							<h3>Lorem Ipsum Name</h3>
							<p>Bacon ipsum dolor amet fatback jerky brisket cupim boudin ham hock hamburger. </p>
							<a href="" class="button">Download Now</a>
						</div>
					</li>
				</ul>

			</div>
		</section>

		<div class="cool-sep"></div>
		
		<div class="content-button">
			<a href="javascript:void(0);" class="open-div">Filter Resources</a>
		</div>
		<div id="show-all-none">
			<section class="box-filters" id="filters">
				<div class="container">
					<ul class="formated-list">
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
						    <label for="styled-checkbox-1">White Papers</label>
						</li>
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2">
						    <label for="styled-checkbox-2">Videos</label>
						</li>
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value4">
						    <label for="styled-checkbox-4">Webinar Replays</label>
						</li>
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value5">
						    <label for="styled-checkbox-5">Ebooks</label>
						</li>
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value6">
						    <label for="styled-checkbox-6">Data Sheets</label>
						</li>
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value7">
						    <label for="styled-checkbox-7">Case Studies</label>
						</li>
					</ul>
				</div>
			</section>

			<section class="section-assets-cards">
				<div class="container">
					<ul class="list-boxes-three">
						<li>
							<div class="asset-cards">
								<img src="<?php bloginfo('template_url'); ?>/images/asset-cards.jpg" alt="" class="responsive">
								<div class="content">
									<small>Webinar</small>
									<h3><a href="">Delivering Intelligent, Omnichannel Self-Service</a></h3>
									<p>Mauris commodo quam augue, nec tristique ligula faucibus at. Ut porttitor venenatis lorem, quis.</p>
									<a href="" class="button-tn">Watch Now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="asset-cards">
								<img src="<?php bloginfo('template_url'); ?>/images/asset-cards.jpg" alt="" class="responsive">
								<div class="content">
									<small>Webinar</small>
									<h3><a href="">Delivering Intelligent, Omnichannel Self-Service</a></h3>
									<p>Mauris commodo quam augue, nec tristique ligula faucibus at. Ut porttitor venenatis lorem, quis.</p>
									<a href="" class="button-tn">Watch Now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="asset-cards">
								<img src="<?php bloginfo('template_url'); ?>/images/asset-cards.jpg" alt="" class="responsive">
								<div class="content">
									<small>Webinar</small>
									<h3><a href="">Delivering Intelligent, Omnichannel Self-Service</a></h3>
									<p>Mauris commodo quam augue, nec tristique ligula faucibus at. Ut porttitor venenatis lorem, quis.</p>
									<a href="" class="button-tn">Watch Now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>

		</div>

		<section class="box-gray marketo-newsletter">
			<div class="container">
				<ul>
					<li><p>Get <b>FREE</b> tools and best practices from Solvvy</p></li>
					<li>
						<script src="//app-ab24.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_1211"></form>
						<script>MktoForms2.loadForm("//app-ab24.marketo.com", "733-WJM-922", 1211);</script>
					</li>
					<li><p>We respect your privacy.</p></li>
				</ul>
			</div>
		</section>


		
<?php get_footer(); ?>