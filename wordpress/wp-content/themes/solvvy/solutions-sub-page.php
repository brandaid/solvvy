<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Solutions Subpage

*/
 ?>
<?php get_header(); ?>
<?php the_post(); ?>


		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		
		<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball box-text-and-image-top">
			<div class="container">
				<?php if($section_1['section_1_animation']){ ?>
				<div class="mackbook">
					<div class="content-mac">
						<img src="<?php echo $section_1['section_1_animation'] ?>" alt="" class="responsive">
					</div>
				</div>
				<?php } ?>
				<h2><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
				<?php if($section_1['section_1_button_destination'] && $section_1['section_1_button_text']){ ?><a href="<?php echo $section_1['section_1_button_destination']; ?>" class="button"><?php echo $section_1['section_1_button_text']; ?></a><?php } ?>
			</div>
		</section>
		<?php } ?>

		<!-- VALUE TAGS -->
		<?php $valueSection = get_field('value_driver_section');
		$link = $valueSection['value_driver_section_button'];
		 ?>
		<?php if($valueSection){ ?>

		<section class="value-tags">
			<div class="container">
				<div class="col-info">
					<h3><?php echo $valueSection['value_driver_section_title'] ?></h3>
					<p><?php echo $valueSection['value_driver_section_copy'] ?> </p>
					<?php if($link){ ?>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button">
							<?php echo $valueSection['value_driver_section_button_text']; ?>
						</a>
					<?php } ?>
				</div>
				<div class="col-slider">
					<?php if($valueSection['value_driver_section_labels']) { ?>
					
					<div class="insights-animation">
						<div class="cards slide-in">
						<?php foreach ($valueSection['value_driver_section_labels'] as $label) {?>
							<div class="card">
								<h4><?php echo $label['value_driver_label']; ?></h4>
							</div>
						<?php } ?>
							
							
						</div>
					</div>
					<?php }; ?>
				</div>
			</div>
		</section>
	<?php } ?>	

		<!-- STORY BOX -->
	<?php $caseStudy = get_field('case_study_section');?>
		<?php if($caseStudy['case_study_copy']){ ?>
		<section class="interior-story">
			<div class="container">
				<article class="brands">
					<div class="col-left">
						<?php
							$image_id = $caseStudy['case_study_logo'];
							$image_size = 'case_study_logo';
							$image_array = wp_get_attachment_image_src($image_id, $image_size);
							$image_url = $image_array[0];
						?>
						<img src="<?php echo $image_url; ?>" alt="">
						<p><?php echo $caseStudy['case_study_copy']; ?></p>
						<p class="autor"><?php echo $caseStudy['case_study_subcopy']; ?></p>
						<a href="<?php if($caseStudy['case_study_button_link_type'] == 'url'){ ?><?php echo $caseStudy['case_study_button_link_destination']; ?><?php } else if($caseStudy['case_study_button_link_type'] == 'pdf'){?><?php echo $caseStudy['case_study_button_link_file']; ?><?php } ?>	" class="button"><?php echo $caseStudy['case_study_button_text']; ?></a>
					</div>
					<div class="col-right">
						<figure class="image-slider">
							<img src="<?php echo $caseStudy['case_study_photo']; ?>" alt="">
						</figure>
					</div>
				</article>
			</div>
		</section>

		<div class="cool-sep"></div>

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
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive block">
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
					<a href="<?php echo $assetSection['asset_button_destination'] ?>" class="button-tn" target="_blank"><?php echo $assetSection['asset_button_text'] ?></a>
				</div>
			</div>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">
		<?php } ?>


<?php get_footer(); ?>