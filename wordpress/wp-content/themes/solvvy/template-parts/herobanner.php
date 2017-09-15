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