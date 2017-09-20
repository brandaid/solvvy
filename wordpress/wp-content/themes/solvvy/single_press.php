<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER BLOG -->
		
		<section class="hero-banner-blog">
			<div class="container">
				<h2>Solvvy Press</h2>
			</div>
		</section>

		<!-- SECTION 1 -->

		<section class="box-text-top">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail( 'inner-post', array( 'class' => 'responsive' ) ); ?>
				<?php the_content(); ?>
			</div>
		</section>
		
		<!-- SEP -->

		<div class="cool-sep"></div>

		
<?php get_footer(); ?>