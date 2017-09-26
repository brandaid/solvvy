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
					<h2 class="titlemetrics"><?php the_sub_field('title_metrics'); ?></h2>
			<?php endif; ?>			
		</section>


		<div class="heads-metrics heads-desktop">

				<?php if(get_sub_field('metrics')): ?>
					<?php 
					if( have_rows('metrics') ):
					    while( have_rows('metrics') ) : the_row(); 
					?>
					        <div class="globe-metric <?php the_sub_field('metrics_class'); ?>"><h4><?php the_sub_field('title'); ?></h4> <p><?php the_sub_field('copy'); ?></p><small><?php the_sub_field('sub_copy'); ?></small><span></span></div>
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
		</div>

		<div class="heads-metrics heads-mobile heads-one">
						<?php  
						$rows = get_sub_field('metrics');
						$first_row = $rows[0];
						$sec_row = $rows[4];
						$first_row_class = $first_row['metrics_class'];
						$first_row_title = $first_row['title'];
						$first_row_copy = $first_row['copy'];
						$first_row_subcopy = $first_row['sub_copy'];
						$sec_row_class = $sec_row['metrics_class'];
						$sec_row_title = $sec_row['title'];
						$sec_row_copy = $sec_row['copy'];
						$sec_row_subcopy = $sec_row['sub_copy']
						?>
					    <div class="globe-metric <?php echo $first_row_class; ?>"><h4><?php echo $first_row_title; ?></h4> <p><?php echo $first_row_copy; ?></p><small><?php echo $first_row_subcopy; ?></small><span></span></div>
						 <div class="globe-metric <?php echo $sec_row_class; ?>"><h4><?php echo $sec_row_title; ?></h4> <p><?php echo $sec_row_copy; ?></p><small><?php echo $sec_row_subcopy; ?></small><span></span></div>
				<?php if(get_sub_field('head_image')): ?>
				<figure>
				<img src="<?php the_sub_field('head_image'); ?>" class="responsive" alt="">
				</figure>
				<?php endif; ?>					
		</div>

				<div class="heads-metrics heads-mobile heads-two">
						<?php  
						$rows = get_sub_field('metrics');
						$third_row = $rows[1];
						$four_row = $rows[3];
						$third_row_class = $third_row['metrics_class'];
						$third_row_title = $third_row['title'];
						$third_row_copy = $third_row['copy'];
						$third_row_subcopy = $third_row['sub_copy'];
						$four_row_class = $four_row['metrics_class'];
						$four_row_title = $four_row['title'];
						$four_row_copy = $four_row['copy'];
						$four_row_subcopy = $four_row['sub_copy'];
						?>
					    <div class="globe-metric <?php echo $third_row_class; ?>"><h4><?php echo $third_row_title; ?></h4> <p><?php echo $third_row_copy; ?></p><small><?php echo $third_row_subcopy; ?></small><span></span></div>
						 <div class="globe-metric <?php echo $four_row_class; ?>"><h4><?php echo $four_row_title; ?></h4> <p><?php echo $four_row_copy; ?></p><small><?php echo $four_row_subcopy; ?></small><span></span></div>
				<?php if(get_sub_field('head_image')): ?>
				<figure>
				<img src="<?php the_sub_field('head_image'); ?>" class="responsive" alt="">
				</figure>
				<?php endif; ?>		
		
		</div>

		<div class="heads-metrics heads-mobile heads-three">
						<?php  
						$rows = get_sub_field('metrics');
						$five_row = $rows[2];
						$five_row_class = $five_row['metrics_class'];
						$five_row_title = $five_row['title'];
						$five_row_copy = $five_row['copy'];
						$five_row_subcopy = $five_row['sub_copy'];
						?>
					    <div class="globe-metric <?php echo $five_row_class; ?>"><h4><?php echo $five_row_title; ?></h4> <p><?php echo $five_row_copy; ?></p><small><?php echo $five_row_subcopy; ?></small><span></span></div>
						 
				<?php if(get_sub_field('head_image')): ?>
				<figure>
				<img src="<?php the_sub_field('head_image'); ?>" class="responsive" alt="">
				</figure>
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
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button"><?php echo $link['title']; ?></a>
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