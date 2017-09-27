		<!-- SECTION BENEFITS -->

		<?php $benefits = get_field('section_benefits'); ?>
		<?php if($benefits){ ?>
		<section class="box-text-top align-center container-normal bkg-orbit-right">
			<div class="container">
				<h2><?php echo $benefits['section_benefits_title']; ?></h2>
				<p><?php echo $benefits['sectin_benefits_copy']; ?></p>

				<?php if($benefits['section_benefits_features']){ ?>
				<ul class="list-boxes-four align-center">
					<?php forEach($benefits['section_benefits_features'] as $single_feature){ ?>
					<li>
						<div class="box-icon-text align-center">
							<i class="<?php echo $single_feature['feature_icon'] ?>"></i>
							<h4><?php echo $single_feature['feature_title'] ?></h4>
							<p><?php  echo$single_feature['feature_description'] ?></p>
						</div>
					</li>
					<?php } ?>
				</ul>
				<?php } ?>

				<a href="<?php echo $benefits['section_benefits_link_destination'] ?>" target="<?php echo $benefits['open_link'] ?>" class="button-pink"><?php echo $benefits['section_benefits_link_text'] ?></a>
			</div>
		</section>
		<?php } ?>