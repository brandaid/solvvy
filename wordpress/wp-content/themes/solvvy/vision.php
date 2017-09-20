<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Vision

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->

<?php get_template_part( 'template-parts/herobanner' ); ?>

		<!-- INDUSTRY CHATTER -->
				<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball align-center bkg-none">
			<div class="container">
				<h2><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
			</div>
					<?php } ?>
		<div class="cool-sep"></div>
		<?php while(has_sub_field('industry_metrics')): ?>		
			<?php if(get_sub_field('title_metrics')): ?>
					<h2><?php the_sub_field('title_metrics'); ?></h2>
			<?php endif; ?>			
		</section>


		<div class="heads-metrics">

				<?php if(get_sub_field('metrics')): ?>
					<?php 
					if( have_rows('metrics') ):
					    while( have_rows('metrics') ) : the_row(); 
					?>
					        <div class="globe-metric <?php the_sub_field('metrics_class'); ?>"><h4><?php the_sub_field('title'); ?></h4> <p><?php the_sub_field('copy'); ?></p><span></span></div>
							<?php								
					    endwhile;
					endif;
					?>
				<?php if(get_sub_field('head_image')): ?>
				<figure>
				<img src="<?php the_sub_field('head_image'); ?>" class="responsive" alt="">
				</figure>
				<?php endif; ?>	
				<?php endif; ?>					
				<?php endwhile; ?>
		</div>

		<!-- FUTURE BOX -->
		

		<section class="box-text-top bkg-none align-center">
			<div class="container">
					<?php while(has_sub_field('future_box')): ?>		
						<?php if(get_sub_field('title')): ?><h2><?php the_sub_field('title'); ?></h2><?php endif; ?>
						<?php if(get_sub_field('copy')): ?><p><?php the_sub_field('copy'); ?></p><?php endif; ?>
						<?php if(get_sub_field('f_button')): ?>
								<?php 
								$link = get_sub_field('f_button');
								if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>
								<?php endif; ?>
						<?php endif; ?>		 
					<?php endwhile; ?>
			</div>
		</section>

		<!-- SECTION METRICS -->
		
		<div class="cool-sep"></div>

			<?php get_template_part( 'template-parts/secmatrics' ); ?>

		<!-- KEY DIFFERENTIATORS -->

		<div class="cool-sep"></div>

		<section class="box-text-top bkg-none container-normal">
			<div class="container">
				<?php while(has_sub_field('key_differentiators')): ?>
				<?php if(get_sub_field('key_title')): ?>
				<h2 class="margin-bottom-90"><?php the_sub_field('key_title'); ?></h2>
				<?php endif; ?>	
				<ul class="list-boxes-four align-left colorful-icons">
				<?php if(get_sub_field('boxes')): ?>
					<?php 
					if( have_rows('boxes') ):
					    while( have_rows('boxes') ) : the_row(); 
					?>
							<li>
						<div class="keys-box">
							<?php the_sub_field('icon'); ?>
							<h3><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('copy'); ?></p>
						</div>
					</li>			  
							<?php								
					    endwhile;
					endif;
					?>
				</ul>	
				<?php endif; ?>					
				<?php endwhile; ?>
			</div>
		</section>

		<div class="cool-sep"></div>

		<?php get_template_part( 'template-parts/competitive' ); ?>

		<div class="cool-sep"></div>
<?php get_footer(); ?>