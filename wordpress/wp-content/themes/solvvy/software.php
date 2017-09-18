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
		<section class="box-text-top pink-ball align-center">
			<div class="container">
				<h2 class="margin-bottom-90"><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
				<img src="<?php echo $section_1['section_1_image'];  ?>" class="responsive" alt="">
			</div>
		</section>
		<?php } ?>


		<!-- BOX BLUE FPO -->

		<div class="line-height"><img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive"></div>
		<div class="blue-box-waves">
	    <?php $section_1 = get_field('blue_box') ?>
		<?php if($section_1){ ?>
			<div class="container">
				<div class="image">
					<img src="<?php echo $section_1['image'];  ?>" class="responsive" alt="">
				</div>
				<div class="info">
					<h2><?php echo $section_1['title'];  ?></h2>
					<p><?php echo $section_1['copy'];  ?></p>
					<a class="button-tn" href="<?php echo $section_1['link_button'];  ?>"><?php echo $section_1['text_button'];  ?></a>
				</div>
			</div>
		<?php } ?>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">


		<section class="box-text-top container-normal align-center">
			<div class="container">
					<?php while(has_sub_field('competitive_matrix')): ?>			
						<?php if(get_sub_field('matrix_title')): ?><h2 class="margin-bottom-90"><?php the_sub_field('matrix_title'); ?></h2><?php endif; ?>
					<?php endwhile; ?>
					<div class="wrapperTable">
					<div class="contTr contTrHeader">
						<div class="contTdOne contTdOneHeader"></div>
				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php the_sub_field('brand_class'); ?> contTdTwoHeaders"><img src="<?php the_sub_field('brand_image'); ?>" alt=""></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					</div>

				<div class="wrapperTable tableShadow">	

					<h3 class="title-head">Present Actual Answers from KB instead of whole articles</h3>			
					<div class="contTr">
						<div class="contTdOne">Present Actual Answers from KB instead of whole articles</div>
				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature1'); ?></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					
					<h3 class="title-head">Language Understanding Goes Beyond Keywords</h3>
				
					<div class="contTr">
						<div class="contTdOne">Language Understanding Goes Beyond Keywords</div>

				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature2'); ?></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					
					<h3 class="title-head">Consumer Facing</h3>
				
					<div class="contTr">
						<div class="contTdOne">Consumer Facing</div>
					
					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature3'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>

					<h3 class="title-head">Rapid Deployment</h3>

					<div class="contTr">
						<div class="contTdOne">Rapid Deployment</div>

					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature4'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>

					<h3 class="title-head">Continuous Learning</h3>

					<div class="contTr">
						<div class="contTdOne">Continuous Learning</div>
					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature5'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>
					
					<h3 class="title-head">Omnichannel</h3>

					<div class="contTr">
						<div class="contTdOne">Omnichannel</div>

					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature6'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>

					</div>
				</div>
			</div>
		</section>

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

		<!-- WHATS IS SOLVVY -->

		<section class="whats-solvvy bkg-none vertical-align-middle">
			<div class="col-left">

				<select class="solutions" id="solutions">
					<option value="tab1">SUPPORT</option>
					<option value="tab2">CUSTOMER SUPPORT</option>
					<option value="tab3">FINANCE</option>
				</select>

				<?php while(has_sub_field('whats')): ?>
								
				<?php if(get_sub_field('solutions')): ?>
					<?php 
					    
					if( have_rows('solutions') ):

					    while( have_rows('solutions') ) : the_row(); 
					        
					        ?>

						<div class="tab-link-without-icon" data-value="<?php the_sub_field('data_id'); ?>">
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