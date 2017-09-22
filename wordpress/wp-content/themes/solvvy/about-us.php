<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template About Us

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>

		<!-- SECTION 1 -->
		<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball">
			<div class="container">
				<h2><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
			</div>
		</section>
		<?php } ?>
		
		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- LINE TIME -->

		<section class="line-time">
			<ul class="formated-list line-time-top">
				<?php while(has_sub_field('section_line_time')): ?>
				<?php if(get_sub_field('line_time_top')): ?>
				
					<?php 
					    
					if( have_rows('line_time_top') ):

					    while( have_rows('line_time_top') ) : the_row(); 
					        
					        ?>
						<li>
						<article class="line-time-box">
						<h4><?php the_sub_field('line_title'); ?></h4>
						<p><?php the_sub_field('line_copy'); ?></p>
						</article>
						</li>
							<?php
								
					    endwhile;

					endif;

					?>
				
				<?php endif; ?>
							 
				<?php endwhile; ?>
			</ul>
			<hr>
			<ul class="formated-list line-time-bottom">
				<?php while(has_sub_field('section_line_time')): ?>
				<?php if(get_sub_field('line_time_bottom')): ?>
				
					<?php 
					    
					if( have_rows('line_time_bottom') ):

					    while( have_rows('line_time_bottom') ) : the_row(); 
					        
					        ?>
						<li>
						<article class="line-time-box">
						<h4><?php the_sub_field('line_title'); ?></h4>
						<p><?php the_sub_field('line_copy'); ?></p>
						</article>
						</li>
							<?php
								
					    endwhile;

					endif;

					?>
				
				<?php endif; ?>
							 
				<?php endwhile; ?>
			</ul>
		</section>
		
		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- VALUES SECTION -->

		<?php $benefits = get_field('section_benefits'); ?>
		<?php if($benefits){ ?>
		<section class="box-text-top bkg-none align-center container-normal">
			<div class="container">
				<h2 class="margin-bottom-90"><?php echo $benefits['section_benefits_title']; ?></h2>
				<p><?php echo $benefits['sectin_benefits_copy']; ?></p>

				<?php if($benefits['section_benefits_features']){ ?>
				<ul class="list-boxes-three align-left colorful-icons">
					<?php forEach($benefits['section_benefits_features'] as $single_feature){ ?>
					<li>
						<div class="keys-box">
							<?php  echo$single_feature['feature_icon'] ?>
							<p><?php  echo$single_feature['feature_description'] ?></p>
						</div>
					</li>
					<?php } ?>
				</ul>
				<?php } ?>

				<a href="<?php echo $benefits['section_benefits_link_destination'] ?>" class="button"><?php echo $benefits['section_benefits_link_text'] ?></a>
			</div>
		</section>
		<?php } ?>

		<!-- HERO BANNER -->

		<?php $section_hero = get_field('section_hero2') ?>
		<?php if($section_hero){ ?>
			<?php if($section_hero['hero_background']){ ?>
			<section class="box-careers" style="background-image: url(<?php echo $section_hero['hero_background']; ?>)">
			<?php }else{ ?>
			<section class="box-careers">
			<?php } ?>
				<div class="container">
					<h2><?php echo $section_hero['hero_copy'];  ?></h2>
					<p><?php echo $section_hero['hero_signature']; ?></p>
				</div>
				<div class="waves"></div>
			</section>
		<?php } ?>

		<!-- SPHERES PETER -->

		<?php get_template_part( 'template-parts/metrics' ); ?>



		<!-- BOX BLUE FPO -->

		<?php get_template_part( 'template-parts/joinus' ); ?>

		
<?php get_footer(); ?>