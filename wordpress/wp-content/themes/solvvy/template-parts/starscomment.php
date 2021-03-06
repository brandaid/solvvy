		<!-- SECTION CLIENT TESTIMONIAL -->

		<?php $testimonials = get_field('section_clients_testimonials'); ?>
		<?php if($testimonials){ ?>	
		<?php $link = $testimonials['testimonial_link'] ?>
		<section class="box-gray box-testimonial">
			<a <?php if($link){ ?>href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"<?php } ?>>
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