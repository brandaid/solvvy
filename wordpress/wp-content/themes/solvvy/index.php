<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Home

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		<!-- HERO BANNER -->

		<?php $section_hero = get_field('section_hero') ?>		

		<?php if($section_hero){ ?>
			<?php if($section_hero['hero_background']){ ?>
				
				<?php
					$image_id = $section_hero['hero_background'];
					$image_size = 'featured';
					$image_array = wp_get_attachment_image_src($image_id, $image_size);
					$image_url = $image_array[0];
				?>

			<section class="hero-banner" style="background: url(<?php echo $image_url; ?>)no-repeat; background-size: cover;">
			<?php }else{ ?>
			<section class="hero-banner">
			<?php } ?>
				<div class="container">
					<h1><?php echo $section_hero['hero_title'];  ?></h1>
					<h3><?php echo $section_hero['hero_copy'];  ?></h3>

					<?php if($section_hero['button_link']) : ?>
						 <a class="button" id="myBtn" href="#"><?php echo $section_hero['button_text'] ?><i class="icon-play"></i></a>
					 <?php endif; ?>
				</div>
				<div class="waves"></div>
				<div class="circles"></div>
			</section>
		<?php } ?>

		<!-- WHATS IS SOLVVY -->
					<?php while(has_sub_field('section_1')): ?>
			<section class="whats-solvvy pink-ball">
			<div class="col-left">

						
							<?php if(get_sub_field('sec1_title')): ?><h2><?php the_sub_field('sec1_title'); ?></h2><?php endif; ?>
							<?php if(get_sub_field('sec1_copy')): ?><p><?php the_sub_field('sec1_copy'); ?></p><?php endif; ?>
							<?php if(get_sub_field('sec1_button')): ?>
							<?php 
								$link = get_sub_field('sec1_button');
								if( $link ): ?>
							<a class="button" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
							<?php endif; ?>
							<?php endif; ?>
						 
					<?php endwhile; ?>
			</div>
			<div class="col-right">
				<div class="mackbook-home">
					<div class="content-mac">
						<img src="<?php bloginfo('template_url'); ?>/images/screen-home.gif" class="screen" alt="">
						<!-- <img src="<?php bloginfo('template_url'); ?>/images/macbook.gif" alt="" class="responsive"> -->
					</div>
				</div>
				
			</div>
		</section>

		<!-- INDUSTRY NEWS -->
		
		<section class="box-gray industry-news">
			<div class="container">
					<?php while(has_sub_field('section_2')): ?>
						
						<?php if(get_sub_field('sec2_title')): ?><h3><?php the_sub_field('sec2_title'); ?></h3><?php endif; ?>
						<hr>
						<?php if(get_sub_field('sec2_image')): ?><img src="<?php the_sub_field('sec2_image'); ?>" alt=""/><?php endif; ?>
						<?php if(get_sub_field('sec2_copy')): ?><p><?php the_sub_field('sec2_copy'); ?></p><?php endif; ?>
						<hr>
						<?php if(get_sub_field('sec2_link')): ?>
								<?php 
								$link = get_sub_field('sec2_link');
								if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['title']; ?> &raquo;</a>
								<?php endif; ?>
						<?php endif; ?>
						 
					<?php endwhile; ?>
			</div>
		</section>

		<!-- DRIVING COMPANIES -->

		<section class="driving-companies">
			<div class="container">
				<?php while(has_sub_field('section_3')): ?>
				<?php if(get_sub_field('sec3_title')): ?><h3><?php the_sub_field('sec3_title'); ?></h3><?php endif; ?>	
				<?php if(get_sub_field('sec3_images')): ?>
				<ul>
					<?php 
					    
					if( have_rows('sec3_images') ):

					    while( have_rows('sec3_images') ) : the_row(); 
					        
					        ?>
					        <li><img src="<?php the_sub_field('sec3_image'); ?>" alt=""></li>
							<?php
								
					    endwhile;

					endif;

					?>
				</ul>
				<?php endif; ?>
							 
				<?php endwhile; ?>

			</div>
		</section>

		<!-- SLIDER OF BRANDS -->

		<section>
			<div class="container">

				<div class="cool-sep top"></div>
				
				<section class="buttons-brand">
					
					<div class="owl-carousel owl-navbars">
				<?php while(has_sub_field('section_4')): ?>
								
				<?php if(get_sub_field('sec4_brands')): ?>
					<?php 
					    
					if( have_rows('sec4_brands') ):

					    while( have_rows('sec4_brands') ) : the_row(); 
					        
					        ?>

						<?php if(get_sub_field('brand_link')): ?>
						<?php 
								$link = get_sub_field('brand_link');
								if( $link ): ?>
									 <div class="item">
										<a class="button-brand" href="<?php echo $link['url']; ?>"><img src="<?php the_sub_field('brand_image'); ?>" alt=""></a>
									</div>

								<?php endif; ?>
						<?php endif; ?>

							<?php
								
					    endwhile;

					endif;

					?>
				<?php endif; ?>
							 
				<?php endwhile; ?>

					</div>

				</section>
				
				<div class="owl-carousel owl-brands">
				    
				<?php while(has_sub_field('section_4')): ?>
								
				<?php if(get_sub_field('sec4_brands')): ?>
					<?php 
					    
					if( have_rows('sec4_brands') ):

					    while( have_rows('sec4_brands') ) : the_row(); 
					        
					        ?>

							<div class="item" data-hash="<?php the_sub_field('brand_data'); ?>">
						<article class="brands">
							<div class="col-left">
								<img src="<?php the_sub_field('brand_image'); ?>" alt="">
								<p><?php the_sub_field('brand_copy'); ?></p>
								<?php if(get_sub_field('brand_link')): ?>
									<?php 
									$link = get_sub_field('brand_button');
									if( $link ): ?>
										<a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<div class="col-right">
								<figure class="image-slider">
									<img src="<?php the_sub_field('brand_slide_image'); ?>" alt="">
								</figure>
							</div>
						</article>
				    		</div>
							<?php
								
					    endwhile;

					endif;

					?>
				<?php endif; ?>
							 
				<?php endwhile; ?>

				</div>
			</div>
		</section>
		<div class="cool-sep"></div>

		<!-- SECTION METRICS -->
		
				<?php while(has_sub_field('section_5')): ?>
				<section class="metrics">
				<div class="container">
				<div class="col-left">					
						<?php if(get_sub_field('sec5_text')): ?><h3 class="text-underlined"><?php the_sub_field('sec5_text'); ?></h3><?php endif; ?>
						<?php if(get_sub_field('sec5_button')): ?>
								<?php 
								$link = get_sub_field('sec5_button');
								if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>
								<?php endif; ?>
						<?php endif; ?>
						 
					<?php endwhile; ?>
				</div>
				<div class="col-right">
					<ul>

				<?php while(has_sub_field('section_5')): ?>
								
				<?php if(get_sub_field('box_metrics')): ?>
					<?php 
					    
					if( have_rows('box_metrics') ):

					    while( have_rows('box_metrics') ) : the_row(); 
					        
					        ?>

					    <li>
							<div class="box-metric <?php the_sub_field('color_class'); ?>">
								<small>
									<i class="icon-monitor"></i>
								<?php the_sub_field('icon_text'); ?>
								</small>
								<h3>
									<?php the_sub_field('number'); ?>
								</h3>
								<p><?php the_sub_field('copy'); ?></p>
							</div>
						</li>
							<?php
								
					    endwhile;

					endif;

					?>
				<?php endif; ?>
							 
				<?php endwhile; ?>

					</ul>
				</div>
			</div>
		</section>

		<div class="cool-sep"></div>

		<!-- SECTION INDUSTRY -->
		<?php while(has_sub_field('section_6')): ?>
		<section class="solution-for-industry">
			<div class="container">
				<?php if(get_sub_field('industry_title')): ?><h2><?php the_sub_field('industry_title'); ?></h2><?php endif; ?>
					<div class="columns-solutions">					
					<div class="col-left">
				
						<select class="solutions" id="solutions">
							<option value="role">For Your Role</option>
							<option value="business">For Your Business Type</option>
							<option value="industry">For Your Industry</option>
						</select>



				<?php if(get_sub_field('solutions')): ?>
				
					<?php 
					    
					if( have_rows('solutions') ):

					    while( have_rows('solutions') ) : the_row(); 
					        
					        ?>



						<div class="tab-link <?php the_sub_field('tab_class'); ?>" data-value="<?php the_sub_field('sol_data_value'); ?>">
							<h4><?php the_sub_field('sol_title'); ?></h4>
							<p><?php the_sub_field('sol_copy'); ?></p>
						</div>
						


							<?php
								
					    endwhile;

					endif;

					?>
				
				<?php endif; ?>
							 
				<?php endwhile; ?>

				
					</div>

					<div class="col-right">
						
				<?php while(has_sub_field('section_6')): ?>
	
				<?php if(get_sub_field('panel_solutions')): ?>
					<?php 
					    
					if( have_rows('panel_solutions') ):

					    while( have_rows('panel_solutions') ) : the_row(); 
					        
					        ?>

						<div class="panel-solution <?php the_sub_field('class_id'); ?>" id="<?php the_sub_field('class_id'); ?>">
							<ul>
								
							<?php if( have_rows('sol_items') ): ?>
								
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('sol_items') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
								<li>
									<?php if(get_sub_field('item_title')): ?><h4><?php the_sub_field('item_title'); ?></h3><?php endif; ?>
									<?php if(get_sub_field('copy_title')): ?><p><?php the_sub_field('copy_title'); ?></p><?php endif; ?>
								</li>
								<?php endwhile; ?>
								
							<?php endif; //if( get_sub_field('items') ): ?>
							</ul>
						</div>	

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


	<?php if($section_hero['button_link']) : ?>
		<!-- Trigger/Open The Modal -->
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <div class="videoWrapper">
		    	<iframe src="<?php echo $section_hero['button_link']; ?>" width="640" height="360" id="video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		    </div>
		  </div>
		</div>
	<?php endif; ?>	

<?php get_footer(); ?>

