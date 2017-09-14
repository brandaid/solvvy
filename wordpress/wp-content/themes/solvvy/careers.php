<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Careers

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		<!-- SECTION HERO BANNER -->

		<?php $section_hero = get_field('section_hero') ?>
		<?php if($section_hero){ ?>
			<?php if($section_hero['hero_background']){ ?>
			<section class="hero-banner hero-banner-interior" style="background-image: url(<?php echo $section_hero['hero_background']; ?>)">
			<?php }else{ ?>
			<section class="hero-banner hero-banner-interior">
			<?php } ?>
				<div class="container">
					<h1><?php echo $section_hero['hero_title'];  ?></h1>
					<h3><?php echo $section_hero['hero_copy'];  ?></h3>
				</div>
				<div class="waves"></div>
				<div class="circles"></div>
			</section>
		<?php } ?>

		<!-- SECTION 1 -->
		<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball bkg-pink">
			<div class="container">
				<h2 class="margin-bottom-90"><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
			</div>
		</section>
		<?php } ?>

		<!-- SECONDARY BANNER -->

		<?php $section_secondary_banner = get_field('section_secondary_banner'); ?>
		<?php if($section_secondary_banner){ ?>
		<?php if($section_secondary_banner['secondary_banner_image']){ ?>
			<section class="box-careers" style="background-image: url(<?php echo $section_secondary_banner['secondary_banner_image']['url']; ?>)">
		<?php }else{ ?>
			<section class="box-careers">
		<?php } ?>
				<div class="container">
					<h2><?php echo $section_secondary_banner['secondary_banner_title']; ?></h2>
				</div>
				<div class="waves"></div>
			</section>
		<?php } ?>

		<!-- SECTION ENGINEER SLIDER -->
		<?php $engineers = get_field('section_engineer_slider'); ?>
		<?php if($engineers['slider_elements']){ ?>
		<section class="slider-interior">
			<div class="container">
				<div class="owl-carousel owl-careers">	
					<?php forEach($engineers['slider_elements'] as $single_engineer){ ?>
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2><?php echo $single_engineer['slider_title'] ?></h2>
									<p><?php echo $single_engineer['slider_copy'] ?></p>
									<a href="<?php echo $single_engineer['slider_related_link_title'] ?>" class="big-link"><?php echo $single_engineer['slider_related_link_destination'] ?></a><br>
									<a href="<?php echo $single_engineer['slider_call_to_action_text'] ?>" class="button"><?php echo $single_engineer['slider_call_to_action_destination'] ?></a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<?php
											$attachment_id = $single_engineer['slider_profile_image'];
											$size = "slider_profile";
											$image = wp_get_attachment_image_src( $attachment_id, $size );
										?>
										<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
										
									</figure>
									<div class="content">
										<h4><?php echo $single_engineer['slider_profile_name'] ?></h4>
										<p><?php echo $single_engineer['slider_profile_description'] ?></p>
									</div>
								</article>
							</div>
						</article>
					</div>
					<?php } ?> 
				</div>
			</div>
		</section>
		<?php } ?>

		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- SECTION BENEFITS -->

		<?php $benefits = get_field('section_benefits'); ?>
		<?php if($benefits){ ?>
		<section class="box-text-top align-center container-normal bkg-orbit-right">
			<div class="container">
				<h2><?php echo $benefits['section_benefits_title']; ?></h2>
				<p><?php echo $benefits['sectin_benefits_copy']; ?></p>

				<?php if($benefits['section_benefits_features']){ ?>
				<ul class="list-boxes-two align-left">
					<?php forEach($benefits['section_benefits_features'] as $single_feature){ ?>
					<li>
						<div class="box-icon-text">
							<i class="icon-apple"></i>
							<h4><?php echo $single_feature['feature_title'] ?></h4>
							<p><?php  echo$single_feature['feature_description'] ?></p>
						</div>
					</li>
					<?php } ?>
				</ul>
				<?php } ?>

				<a href="<?php echo $benefits['section_benefits_link_destination'] ?>" class="button-pink"><?php echo $benefits['section_benefits_link_text'] ?></a>
			</div>
		</section>
		<?php } ?>

		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- SPHERES METRICS-->

		<?php $metrics = get_field('section_metrics'); ?>
		<?php if($metrics){ ?>
		<section class="box-text-top align-center container-normal bkg-none">
			<div class="container">
				<h2><?php echo $metrics['metrics_title']; ?></h2>
				<p><?php echo $metrics['metrics_copy'] ?></p>
				<div id="cy"></div>
			</div>
		</section>
		<?php } ?>

		<!-- SEP -->
		
		<div class="cool-sep"></div>

		<!-- SECTION SALES SLIDER -->

		<?php $salesmen = get_field('section_sales_slider'); ?>
		<?php if($salesmen['slider_sales_elements']){ ?>
		<section class="slider-interior">
			<div class="container">
				<div class="owl-carousel owl-careers">	
					<?php forEach($salesmen['slider_sales_elements'] as $single_salesman){ ?>
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2><?php echo $single_salesman['slider_sales_title'] ?></h2>
									<p><?php echo $single_salesman['slider_sales_copy'] ?></p>
									<a href="<?php echo $single_salesman['slider_sales_related_link_title'] ?>" class="big-link"><?php echo $single_salesman['slider_sales_related_link_destination'] ?></a><br>
									<a href="<?php echo $single_salesman['slider_sales_call_to_action_text'] ?>" class="button"><?php echo $single_salesman['slider_sales_call_to_action_destination'] ?></a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<?php
											$attachment_id = $single_salesman['slider_sales_profile_image'];
											$size = "slider_profile";
											$image = wp_get_attachment_image_src( $attachment_id, $size );
										?>
										<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
										
									</figure>
									<div class="content">
										<h4><?php echo $single_salesman['slider_sales_profile_name'] ?></h4>
										<p><?php echo $single_salesman['slider_sales_profile_description'] ?></p>
									</div>
								</article>
							</div>
						</article>
					</div>
					<?php } ?> 
				</div>
			</div>
		</section>
		<?php } ?>

		<!-- SECTION CLIENT TESTIMONIALS -->

		<?php $testimonials = get_field('section_clients_testimonials'); ?>
		<?php if($testimonials){ ?>	
		<section class="box-gray box-testimonial">
			<div class="container">
				<ul class="formated-list">
					<?php
						$attachment_id = $testimonials['client_logo'];
						$size = "client_logo";
						$image = wp_get_attachment_image_src( $attachment_id, $size );
					?>
					<li><img src= "<?php echo $image[0]; ?>" alt="" class="responsive"></li>
					<li><p><?php echo $testimonials['client_comment'] ?></p></li>
					<li>
						<?php for ($i = 1; $i <= $testimonials['stars_calification']; $i++) {  ?>
						<i class="fa fa-star"></i>
						<?php } ?>
					</li>

				</ul>
			</div>
		</section>
		<?php } ?>

		<!-- SECTION SLIDER BOTTOM TEAM -->
		
		<?php $team = get_field('section_team_members_testimonials'); ?>
		<?php if($team){ ?>
		<section class="box-text-top container-normal align-center bkg-none">
			<div class="container">
				<h2><?php echo $team['team_testimonials_title']; ?></h2>
				<p><?php echo $team['team_testimonials_copy']; ?></p>

				<?php if($team['testimonials_slider']){ ?>
				<div class="owl-carousel owl-careers">
					<?php forEach($team['testimonials_slider'] as $single_teammate){ ?>
					<div class="item">
						<div class="padding">
							<article class="box-slider-bottom">
								<svg class="waves-bottom2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1657 134.52"><title>wave-top</title><path d="M1657,173V92c-222.29,15.82-453.31,37.81-652.11,5.85C275.33-19.45,191.35,69.61,0,90.44v79.3L121.44,173Z" transform="translate(0 -38.45)" style="fill:#9155aa;opacity:0.3499999940395355;isolation:isolate"/><path d="M1657,173V44.1c-183.6,31.36-380.1,76.73-532.61,88.19C752,160.27,403.57,4.84,0,64.52V173Z" transform="translate(0 -38.45)" style="fill:#5d0e8b"/></svg>
								<div class="content">
									<h4><?php echo $single_teammate['testimonial_description'] ?></h4>
								</div>
								<div class="content-image">
									<?php
										$attachment_id = $single_teammate['testimonial_image'];
										$size = "slider_team";
										$image = wp_get_attachment_image_src( $attachment_id, $size );
									?>
									<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
								</div>
							</article>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</section>
		<?php } ?>

		<!-- SECTION JOIN US -->

		<?php $joinUs = get_field('section_join_us'); ?>
		<?php if($joinUs){ ?>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive block">
		<div class="blue-box-waves in-careers">
			<div class="container">
				<div class="image">
					<div class="images">
						<?php
							$attachment_id = $joinUs['join_us_right_image'];
							$size = "join_us_section";
							$image = wp_get_attachment_image_src( $attachment_id, $size );
						?>
						<img src= "<?php echo $image[0]; ?>" alt="" class="image-back">
						<?php
							$attachment_id = $joinUs['join_us_left_image'];
							$image = wp_get_attachment_image_src( $attachment_id, $size );
						?>
						<img src= "<?php echo $image[0]; ?>" alt="" class="image-front">
					</div>
				</div>
				<div class="info">
					<h2><?php echo $joinUs['join_us_title'] ?></h2>
					<p><?php echo $joinUs['join_us_description'] ?></p>
					<a href="<?php echo $joinUs['join_us_button_destination'] ?>" class="button-tn"><?php echo $joinUs['join_us_button_text'] ?></a>
				</div>
			</div>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">
		<?php } ?>

<?php get_footer(); ?>