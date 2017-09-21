		<!-- BOX PURPLE FPO -->
		<div class="line-height"><img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive"></div>
		<div class="blue-box-waves">
	    <?php $section_1 = get_field('blue_box') ?>
		<?php if($section_1){ ?>
			<div class="container">
				<div class="image">
					<img src="<?php echo $section_1['image'];  ?>" class="responsive" alt="">
				</div>
				<div class="info">
					<h2><?php echo $section_1['title'];  ?></h2>
					<p><?php echo $section_1['copy'];  ?></p>
					<a class="button-tn" href="<?php echo $section_1['link_button'];  ?>"><?php echo $section_1['text_button'];  ?></a>
				</div>
			</div>
		<?php } ?>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">