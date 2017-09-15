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
									<a href="<?php echo $single_salesman['slider_sales_related_link_destination'] ?>" class="big-link"><?php echo $single_salesman['slider_sales_related_link_title'] ?></a><br>
									<a href="<?php echo $single_salesman['slider_sales_call_to_action_destination'] ?>" class="button"><?php echo $single_salesman['slider_sales_call_to_action_text'] ?></a>
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