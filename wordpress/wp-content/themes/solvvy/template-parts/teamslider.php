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
								<div class="content align-left">
									<h4><?php echo $single_teammate['testimonial_description'] ?></h4>
									<h4><span class="sgnature"><?php echo $single_teammate['testimonial_signature'] ?>El Kevin de Alva</span></h4>
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