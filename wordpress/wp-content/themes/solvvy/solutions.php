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

		<span id="panels"></span>
		<section class="solution-for-industry tab-panels">
			<div class="container">
				
				<div class="columns-solutions">
					<?php $rows = get_field('solutions_cards');
							if($rows){ ?>
							
					<div class="col-left">
						<select class="solutions <?php if (get_the_ID() == 920): ?> for-your-role <?php elseif (get_the_ID() == 909):?>for-your-business-type <?php elseif (get_the_ID() == 923):?>for-your-industry<?php endif ?>" id="subpages">
    					<?php foreach($rows as $row){ ?>
    					<?php // set up post object
					        $post_object = $row['postobject'];
					        if( $post_object ) {
					        $post = $post_object;
					        setup_postdata($post);
					        ?>
							<option rel="panel-<?php the_ID() ?>" value="panel-<?php the_ID() ?>"><?php the_title(); ?></option>
							    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

   								 <?php }; ?>				
						<?php }; ?>
						</select>

   						<?php foreach($rows as $row){ ?>
   						 <?php // set up post object
					        $post_object = $row['postobject'];
					        if( $post_object ) {
					        $post = $post_object;
					        setup_postdata($post);
					        ?>

							<?php $card_info = get_field('card_info'); ?>
							<?php if($card_info){ ?>
							<div class="tab-link" rel="panel-<?php the_ID() ?>">
								<h4><?php if($card_info['icon']){ ?><i class="<?php echo $card_info['icon'] ?>"><?php } ?></i><?php the_title(); ?></h4>
								<p><?php echo $card_info['intro_paragraph']; ?></p>
							</div>		
							<?php } ?>
							<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    						<?php }; ?>
						<?php }; ?>

      				</div>

					<div class="col-right">
						<?php 
						$i=0;
						foreach($rows as $row){ ?>

					    <?php // set up post object
					        $post_object = $row['postobject'];
					        if( $post_object ) {
					        $post = $post_object;
					        setup_postdata($post);
					        ?>
					        <?php global $post;
							$direct_parent = $post->post_parent; ?>
							<?php $card_info = get_field('card_info'); 
							$link = $card_info['card_button'];?>
							<?php if($card_info){ ?>
							<div class="panel <?php echo ($i==0)?'active':''; ?> <?php if ($direct_parent == 920): ?> for-your-role <?php elseif ($direct_parent == 909):?>for-your-business-type <?php elseif ($direct_parent == 923):?>for-your-industry<?php endif ?>" id="panel-<?php the_ID() ?>">
								<h4 class="panel-business"><?php echo $card_info['card_title']; ?></h4>
								<p><?php echo $card_info['card_copy']; ?></p>
								<a href="<?php the_permalink(); ?>" class="button-tn">View More</a>	
							</div>
							<?php }  $i++; ?>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					    <?php }; ?>

					    <?php }; ?>
						
				    </div>
				 	<!-- End Repeater -->
					<?php }; ?>
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
		<?php if($section_secondary_banner['secondary_banner_quote']){ ?>
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
	

		<!-- BOX BLUE FPO -->

		<?php $assetSection = get_field('section_asset'); ?>
			<?php if($assetSection){ ?>
					<div class="line-height"><img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive"></div>
					<div class="blue-box-waves">
						<div class="container">
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
							<a href="<?php if( $assetSection['asset_button_link_type'] == 'url' ):?><?php echo $assetSection['asset_button_destination'] ?><?php elseif( $assetSection['asset_button_link_type'] == 'pdf' ): ?><?php echo $assetSection['asset_button_link_pdf'] ?><?php endif; ?>" class="button-tn" target="<?php echo $assetSection['open_link_in_a_new_tab'][0]; ?>"><?php echo $assetSection['asset_button_text']; ?></a>
						</div>
						</div>
					</div>
					<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">
		<?php } ?>

<?php get_footer(); ?>

