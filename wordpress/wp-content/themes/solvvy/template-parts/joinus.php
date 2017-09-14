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