<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Software

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>

		<!-- BOX TEXT -->		

				<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball">
				<div class="software-container">
				<div class="col-left">
				<h2><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
				</div>
				<div class="col-right">
				<img src="<?php echo $section_1['section_1_image'];  ?>" class="responsive" alt="">	
				</div>
				</div>
		</section>
		<?php } ?>


		<!-- BOX BLUE FPO -->

		<?php get_template_part( 'template-parts/boxpurplefpo' ); ?>

		<!-- COMPETITIVE MATRIX -->

		<?php get_template_part( 'template-parts/competitive' ); ?>

		<!-- WHAT IS SOLVVY -->
		<div class="cool-sep"></div>
				<?php $whats = get_field('whats') ?>
		<?php if($whats){ ?>
		<section class="box-text-top bkg-none align-center">
			<div class="container">
				<h2><?php echo $whats['what_title'];  ?></h2>
				<p><?php echo $whats['what_copy'];  ?></p>
			</div>
		</section>
		<?php } ?>
		<section class="whats-solvvy bkg-none vertical-align-middle">
			<div class="col-left">

				<select class="solutions" id="solutions">
					<option value="tab1">INTEGRATE</option>
					<option value="tab2">MEASURE</option>
					<option value="tab3">EXCEED COSTUMER EXPECTATIONS</option>
				</select>

				<?php while(has_sub_field('whats')): ?>
								
				<?php if(get_sub_field('solutions')): ?>
					<?php 
					    
					if( have_rows('solutions') ):

					    while( have_rows('solutions') ) : the_row(); 
					        
					        ?>

						<div class="tab-link-without-icon <?php the_sub_field('tab_class'); ?>" data-value="<?php the_sub_field('data_id'); ?>">
							<h4><?php the_sub_field('title'); ?></h4>
							<p><?php the_sub_field('copy'); ?></p>
						</div>
							<?php
								
					    endwhile;

					endif;

					?>
				<?php endif; ?>
							 
				<?php endwhile; ?>

			</div>
			<div class="col-right">

				<?php while(has_sub_field('whats')): ?>
								
				<?php if(get_sub_field('solutions')): ?>
					<?php 
					    
					if( have_rows('solutions') ):

					    while( have_rows('solutions') ) : the_row(); 
					        
					        ?>
						
						<div class="" id="<?php the_sub_field('data_id'); ?>">
							<img src="<?php the_sub_field('right_image'); ?>" class="responsive" alt="">
						</div>
							<?php
								
					    endwhile;

					endif;

					?>
				<?php endif; ?>
							 
				<?php endwhile; ?>

			</div>


		</section>

		<div class="cool-sep"></div>

		
<?php get_footer(); ?>