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
