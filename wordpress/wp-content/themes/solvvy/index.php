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
			<div class="wrapper">
				<div class="col-left">
				
							
								<?php if(get_sub_field('sec1_title')): ?><h2><?php the_sub_field('sec1_title'); ?></h2><?php endif; ?>
								<?php if(get_sub_field('sec1_copy')): ?><p><?php the_sub_field('sec1_copy'); ?></p><?php endif; ?>
								<?php if(get_sub_field('sec1_button')): ?>
								<?php 
									$link = get_sub_field('sec1_button');
									if( $link ): ?>
								<a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
								<?php endif; ?>
							 
						
				</div>
				<div class="col-right">
					<div class="mackbook-home">
						<div class="content-mac">
							<?php if(get_sub_field('image')): ?><img src="<?php the_sub_field('image'); ?>" class="screen" alt=""><?php endif; ?>
							
							<!-- <img src="<?php bloginfo('template_url'); ?>/images/macbook.gif" alt="" class="responsive"> -->
						</div>
					</div>
					
				</div>
			</div>
		</section>
					<?php endwhile; ?>
		<!-- INDUSTRY NEWS -->
		
		<section class="box-gray industry-news">
			<div class="container">
					<?php while(has_sub_field('section_2')): ?>
						
						<?php if(get_sub_field('sec2_title')): ?><h3><?php the_sub_field('sec2_title'); ?></h3><?php endif; ?>
						<hr>
						<?php if(get_sub_field('sec2_image')): ?><img src="<?php the_sub_field('sec2_image'); ?>" alt=""/><?php endif; ?>
						<?php if(get_sub_field('sec2_copy')): ?><p><?php the_sub_field('sec2_copy'); ?></p><?php endif; ?>
						<hr>
						<a href="<?php if( get_sub_field('button_link_type') == 'url' ):?><?php the_sub_field('button_link_destination') ?>
						<?php elseif( get_sub_field('button_link_type') == 'pdf' ): ?><?php the_sub_field('button_link_pdf') ?><?php endif; ?>" target="<?php the_sub_field('open_link') ?>"><?php the_sub_field('button_text') ?> &raquo;</a>						 
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
										<a class="button-brand" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><img src="<?php the_sub_field('brand_image'); ?>" alt=""></a>
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
								<p class="autor"><?php the_sub_field('brand_subcopy'); ?></p>
								<?php if(get_sub_field('brand_link')): ?>
									<?php 
									$link = get_sub_field('brand_button');
									if( $link ): ?>
										<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button"><?php echo $link['title']; ?></a>
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
		
		<?php $metrics_post = get_field('section_5'); ?>
		<?php if($metrics_post){ ?>
			<section class="metrics">
				<div class="container">
					<div class="col-left">			
						<?php if($metrics_post['sec5_text']){ ?>
						<h3 class="text-underlined"><?php echo $metrics_post['sec5_text'] ?></h3>
						<?php } ?>

						<?php if($metrics_post['sec5_button']): ?>
						<a href="<?php echo $metrics_post['sec5_button']['url']; ?>" target="<?php echo $metrics_post['sec5_button']['target']; ?>" class="button"><?php echo $metrics_post['sec5_button']['title']; ?></a>
						<?php endif; ?>
							 
					</div>
					<div class="col-right">
						<ul>
							<?php if($metrics_post['box_metrics']){ ?>
							<?php forEach($metrics_post['box_metrics'] as $single_metric) {?>
						    <li>
								<div class="box-metric <?php echo $single_metric['color_class'] ?>">
									<small>
										<i class="<?php echo $single_metric['icon_field'] ?>"></i>
									<?php echo $single_metric['icon_text'] ?>
									</small>
									<h3>
										<?php echo $single_metric['number'] ?>
									</h3>
									<p><?php echo $single_metric['copy'] ?></p>
								</div>
							</li>
							<?php } ?>
							<?php } ?>	

						</ul>
					</div>
			</div>
		</section>

		<?php } ?>

		<div class="cool-sep"></div>

		<!-- SECTION INDUSTRY -->


		<?php $industy_section = get_field('section_6') ?>
		<?php if($industy_section){ ?>
			<section class="solution-for-industry">
				<div class="container">
					<?php if($industy_section['industry_title']){ ?>
					<h2><?php echo $industy_section['industry_title'] ?></h2>
					<?php } ?>
					<div class="columns-solutions">					
						<div class="col-left">		
							<select class="solutions" id="solutions">
								<option value="role">For Your Role</option>
								<option value="business">For Your Business Type</option>
								<option value="industry">For Your Industry</option>
							</select>
							<?php if($industy_section['solutions']){ ?>
								<?php forEach($industy_section['solutions'] as $single_solution){ ?>
									<div class="tab-link <?php echo $single_solution['tab_class']; ?>" data-value="<?php echo $single_solution['sol_data_value'] ?>">
										<h4>
											<i class="<?php echo $single_solution['icon_image']; ?>" ></i>
											<?php echo $single_solution['sol_title'] ?>
												
										</h4>
										<p><?php echo $single_solution['sol_copy'] ?></p>
									</div>	
								<?php } ?>	
							<?php } ?>	 		
						</div>

						<div class="col-right">
							<?php if($industy_section['panel_solutions']){ ?>	
								<?php forEach($industy_section['panel_solutions'] as $single_panel ){ ?>
									<div class="panel-solution <?php echo $single_panel['class_id'] ?>" id="<?php echo $single_panel['class_id'] ?>">
										<ul>	
											<?php if( $single_panel['sol_items']){ ?>
												<?php forEach($single_panel['sol_items'] as $single_item){ ?>
												<li>
													<?php if( $single_item['item_title'] ){ ?>
														<?php $post_object = $single_item['link'];
															if( $post_object ): 
																$post = $post_object;
																setup_postdata( $post ); 
														?>
														<a href="<?php the_permalink(); ?>" target="<?php echo $single_item['open_link'] ?>">
															<h4>
																<i class="<?php echo $single_item['icon_image'] ?>"></i>
																<?php echo $single_item['item_title'] ?>	
															</h4>
														</a>
														<?php wp_reset_postdata(); ?>
														<?php endif; ?>
													<?php } ?>
													<?php if($single_item['copy_title']){ ?>
														<p><?php echo $single_item['copy_title'] ?></p>
													<?php } ?>
												</li>		
												<?php } ?>
											<?php } ?>
										</ul>
									</div>				
								<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>

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


