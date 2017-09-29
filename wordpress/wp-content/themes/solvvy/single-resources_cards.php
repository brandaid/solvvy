<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER BLOG -->
		
		<section class="hero-banner-blog">
			<div class="container">
				<h2>Solvvy Resources Cards</h2>
			</div>
		</section>

		<!-- SECTION 1 -->

		<section class="box-text-top">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail( 'inner-post', array( 'class' => 'responsive' ) ); ?>
				<?php the_content(); ?>
				<a href=" <?php if( get_field('button_link_type') == 'url' ):?><?php the_field('button_link_destination') ?><?php elseif( get_field('button_link_type') == 'pdf' ): ?><?php the_field('button_link_pdf') ?><?php endif; ?>" class="button" target="_blank"><?php the_field('button_text') ?></a>
			</div>
		</section>
		
		<!-- SEP -->

		<div class="cool-sep"></div>

		
<?php get_footer(); ?>