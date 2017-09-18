		<!-- SECTION HERO BANNER -->
		
		<?php $section_hero = get_field('section_hero') ?>		

		<?php if($section_hero){ ?>
			<?php if($section_hero['hero_background']){ ?>
				
				<?php
					$image_id = $section_hero['hero_background'];
					$image_size = 'featured';
					$image_array = wp_get_attachment_image_src($image_id, $image_size);
					$image_url = $image_array[0];
					print_r($image_url);
				?>

			<section class="hero-banner hero-banner-interior" style="background: url(<?php echo $image_url; ?>)no-repeat; background-size: cover;">
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