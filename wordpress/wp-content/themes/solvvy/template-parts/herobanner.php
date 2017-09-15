		<!-- SECTION HERO BANNER -->
		
		<?php $section_hero = get_field('section_hero') ?>
		
		<?php
			$image_id = get_field('hero_background');
			$image_size = 'featured';
			$image_array = wp_get_attachment_image_src($image_id, $image_size);
			$image_url = $image_array[0];
		?>

		

		<?php if($section_hero){ ?>
			<?php if($section_hero['hero_background']){ ?>
			<section class="hero-banner hero-banner-interior" style="background-image: url(<?php echo $image_url; ?>)">
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