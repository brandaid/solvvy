<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Solutions Lander

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- SECTION 1 -->
		
		<?php get_template_part( 'template-parts/section1' ); ?>		

		<!-- PANELS -->

	<div class="cool-sep"></div>

		<section class="solution-for-industry tab-panels">
			<div class="container">
				
				<div class="columns-solutions">
					<?php 
						$selectedterm = get_field('solutions_cards')->slug;
						$termslug =  $term->slug;
							$args = array(
								'posts_per_page'	=> -1,
								'post_type'			=> 'solutions_cards',
								'solutions-types'	=> $selectedterm,
							);

							$the_query = new WP_Query( $args ); ?>
							<?php if( $the_query->have_posts() ): ?>
							
					<div class="col-left">
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<?php $card_info = get_field('card_info'); ?>
									<?php if($card_info){ ?>
									<div class="tab-link" rel="panel-<?php the_ID() ?>">
										<h4><i class="icon-whatsapp"></i><?php the_title(); ?></h4>
										<p><?php echo $card_info['intro_paragraph']; ?></p>
									</div>		
									<?php } ?>
								<?php endwhile; ?>

      				</div>

					<div class="col-right">
						<?php 
						$i=0;
						while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<?php $card_info = get_field('card_info'); 
							$link = $card_info['card_button'];?>
							<?php if($card_info){ ?>
							<div class="panel <?php echo ($i==0)?'active':''; ?>" id="panel-<?php the_ID() ?>">
								<h4><?php echo $card_info['card_title']; ?></h4>
								<p><?php echo $card_info['card_copy']; ?></p>
								<?php if($link){ ?><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button-tn"><?php echo $link['title']; ?></a>	<?php } ?>
							</div>
							<?php }  $i++; ?>
						<?php endwhile; ?>	
						
				    </div>
				 	<?php endif; ?>

					<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>	
				</div>

			</div>
		</section>	

		<!-- DRIVING COMPANIES -->
		

		<section class="box-gray driving-companies driving-interior">
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


		<!-- SECONDARY BANNER -->

		<?php $section_secondary_banner = get_field('section_secondary_banner'); ?>
		<?php if($section_secondary_banner){ ?>
		<?php if($section_secondary_banner['secondary_banner_image']){ ?>
			<section class="box-partners" style="background-image: url(<?php echo $section_secondary_banner['secondary_banner_image']['url']; ?>)">
		<?php }else{ ?>
			<section class="box-partners">
		<?php } ?>
				<div class="container">
					<h2><?php echo $section_secondary_banner['secondary_banner_quote']; ?></h2>
					<?php if($section_secondary_banner['secondary_banner_quote_author']){ ?><small><?php echo $section_secondary_banner['secondary_banner_quote_author']; ?></small><?php } ?>
					<?php if($section_secondary_banner['secondary_banner_customer_logo']){ ?><img src=" <?php echo $section_secondary_banner['secondary_banner_customer_logo']; ?>" class="responsive brand" alt=""><?php } ?>
				</div>
				<div class="waves"></div>
			</section>
		<?php } ?>


		<!-- SECTION METRICS -->
		
		<?php while(has_sub_field('section_5', 5)): ?>
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

			<?php while(has_sub_field('section_5', 5)): ?>
								
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


					</ul>
				</div>
			</div>
		</section>
		<?php endif; ?>
							 
		<?php endwhile; ?>

		<!-- BOX BLUE FPO -->

		<?php $assetSection = get_field('section_asset'); ?>
			<?php if($assetSection){ ?>
			<section class="box-gray">
				<div class="container">
					<div class="blue-box">
						
						<div class="image">
						<?php if($assetSection['asset_left_image']){ ?>
						<?php
								$attachment_id = $assetSection['asset_left_image'];
								$size = "join_us_section";
								$image = wp_get_attachment_image_src( $attachment_id, $size );
							?>
							<img src="<?php echo $image[0]; ?>" class="responsive" alt="">
						
						<?php } else { ?>
								<img src="<?php bloginfo('template_url'); ?>/images/fpo.png" class="responsive" alt="">
						<?php } ?>
						</div>
						<div class="info">
							<h2><?php echo $assetSection['asset_title'] ?></h2>
							<p><?php echo $assetSection['asset_description'] ?></p>
							<a href="<?php echo $assetSection['asset_button_destination'] ?>" class="button-tn" target="_blank"><?php echo $assetSection['asset_button_text'] ?></a>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>

<?php get_footer(); ?>

