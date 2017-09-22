<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Our Events

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		
		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball title-to-left">
			<div class="container align-left">
				<h2>Upcoming Events</h2>

				<ul class="list-boxes-three three-ipad">

					<?php 

					$meta_query = array(
						array(
							'key' => 'date',
							'value' => date('Ymd'),
							'type' => 'DATE',
							'compare' => '>='
						)
					);


					$loop = new WP_Query( array( 
						'post_type' => 'event', 
						'posts_per_page' => $posts_per_page,
						'order' => 'DESC',
						'orderby' => 'meta_value_num',
						'meta_key' => 'date',
						'offset' => (max(1, get_query_var('paged')) - 1) * $posts_per_page,
						'meta_query' => $meta_query
						) 
					); ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li>
						<div class="box-events waves-bottom">

							<?php the_post_thumbnail( 'featured_events', array( 'class' => 'responsive' ) ); ?>
							
							<div class="content align-left">
								<h3 class="truncated"><?php the_title(); ?></h3>
								<p class="data-article"><?php the_field('location'); ?> <span><?php the_field('date'); ?></span></p>
								<a href="<?php the_field('cta_link'); ?>" class="button-tn" <?php if( get_field('open_external_window') ): ?> target="blank" <?php endif; ?>><?php the_field('cta_copy'); ?></a>
							</div>
						</div>
					</li>
					<?php endwhile; wp_reset_query(); ?>

				</ul>
			</div>
		</section>

		<div class="cool-sep"></div>

		<section class="box-text-top container-normal title-to-left">
			<div class="container  align-left">
				<h2>Past Events</h2>

				<ul class="list-boxes-three three-ipad">

					<?php 

					$meta_query = array(
						array(
							'key' => 'date',
							'value' => date('Ymd'),
							'type' => 'DATE',
							'compare' => '<='
						)
					);

					$loop = new WP_Query( array( 
						'post_type' => 'event', 
						'posts_per_page' => $posts_per_page,
						'order' => 'DESC',
						'orderby' => 'meta_value_num',
						'meta_key' => 'date',
						'offset' => (max(1, get_query_var('paged')) - 1) * $posts_per_page,
						'meta_query' => $meta_query
						) 
					); ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li>
						<div class="box-events">

							<?php the_post_thumbnail( 'featured_events', array( 'class' => 'responsive' ) ); ?>
							
							<div class="content align-left">
								<h3><?php the_title(); ?></h3>
								<p class="data-article"><?php the_field('location'); ?> <span><?php the_field('date'); ?></span></p>
								<a href="<?php the_field('cta_link'); ?>" class="button-tn" <?php if( get_field('open_external_window') ): ?> target="blank" <?php endif; ?>><?php the_field('cta_copy'); ?></a>
							</div>
						</div>
					</li>
					<?php endwhile; wp_reset_query(); ?>

					
				
				</ul>
			</div>
		</section>
		
		<div class="cool-sep"></div>

		
<?php get_footer(); ?>