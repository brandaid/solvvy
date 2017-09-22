		<!-- SECTION CUSTOMER BRANDS -->
		<?php $redirects = get_field('section_customer_redirects'); ?>
		<?php if($redirects){ ?>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-gray-top.png" class="responsive block" alt="">
		<section class="box-gray-waves">
			<div class="container align-left">
				<ul class="brands-customers">
					<?php forEach($redirects as $single_redirect){ ?>
					<li>
						<div class="center-element">
							<div class="the-element">
								<?php if ($single_redirect['customer_page']) { ?>
								<a href="<?php echo $single_redirect['customer_page'] ?>" target="_blank">
								<?php }else{ ?>
								<a target="_blank">
								<?php } ?>
									<?php
										$attachment_id = $single_redirect['customer_grey_brand'];
										$size = "redirects_logo";
										$image = wp_get_attachment_image_src( $attachment_id, $size );
									?>
									<img src= "<?php echo $image[0]; ?>" alt="">
								</a>
							</div> 
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</section>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-gray-bottom.png" class="responsive" alt="">
		<?php } ?>