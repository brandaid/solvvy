		<!-- SECTION 1 -->
		<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball bkg-pink">
			<div class="container">
				<h2 class="margin-bottom-50"><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
				<?php if($section_1['section_1_button_destination'] && $section_1['section_1_button_text']){ ?><a href="<?php echo $section_1['section_1_button_destination']; ?>" target="<?php echo $section_1['section_1_button_destination']; ?>" class="button"><?php echo $section_1['open_link']; ?></a><?php } ?>
			</div>
		</section>
		<?php } ?>