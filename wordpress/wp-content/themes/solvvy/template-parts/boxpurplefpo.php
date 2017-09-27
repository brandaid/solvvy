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
					<a href="<?php if( $section_1['button_link_type'] == 'url' ):?><?php echo $section_1['button_link_destination'] ?><?php elseif( $section_1['button_link_type'] == 'pdf' ): ?><?php echo $section_1['button_link_pdf'] ?><?php endif; ?>" class="button-tn" target="<?php echo $section_1['open_link_in_a_new_tab'][0]; ?>"><?php echo $section_1['text_button']; ?></a>
				</div>
			</div>
		<?php } ?>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">