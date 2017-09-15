<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER BLOG -->
		
		<section class="hero-banner-blog">
			<div class="container">
				<h1>Solvvy Newsletters</h1>
			</div>
		</section>

		<!-- SECTION 1 -->

		<section class="box-text-top">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</section>
		
		<!-- SEP -->

		<div class="cool-sep"></div>

		
<?php get_footer(); ?>