<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Newsletter

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball padding-top">
			<div class="container">

				<ul class="list-boxes-three">
					<?php $loop = new WP_Query( array( 'post_type' => 'newsletter', 'order' => 'ASC' ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li>
						<div class="the-post">
							<?php the_post_thumbnail( 'newsletter', array( 'class' => 'responsive' ) ); ?>
							<div class="content">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<small><?php the_time('j F, Y'); ?></small>
								<a href="<?php the_permalink(); ?>" class="button">Read Now</a>
							</div>
						</div>
					</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>

			</div>
		</section>
		
		<div class="content-button">
			<a href="javascript:void(0);" class="button-white">Load More</a>
		</div>
		
		<div class="cool-sep"></div>
		
<?php get_footer(); ?>