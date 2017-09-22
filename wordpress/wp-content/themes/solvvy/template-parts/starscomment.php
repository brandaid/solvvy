		<!-- SECTION CLIENT TESTIMONIAL -->

		<?php $testimonials = get_field('section_clients_testimonials'); ?>
		<?php if($testimonials){ ?>	
		<section class="box-gray box-testimonial">
			<a href="<?php echo $testimonials['testimonial_link'] ?>" target="_blank">
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
			</a>
		</section>
		<?php } ?>