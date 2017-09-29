		<!-- SECTION METRICS -->

		<?php $metrics_post = get_field('section_5'); ?>
		<?php if($metrics_post){ ?>
			<section class="metrics">
				<div class="container">
					<div class="col-left">
						<?php if($metrics_post['sec5_text']){ ?>
						<h3 class="text-underlined"><?php echo $metrics_post['sec5_text'] ?></h3>
						<?php } ?>

						<?php if($metrics_post['sec5_button']): ?>
						<a href="<?php echo $metrics_post['sec5_button']['url']; ?>" target="<?php echo $metrics_post['sec5_button']['target']; ?>" class="button"><?php echo $metrics_post['sec5_button']['title']; ?></a>
						<?php endif; ?>

					</div>
					<div class="col-right">
						<ul>
							<?php if($metrics_post['box_metrics']){ ?>
							<?php forEach($metrics_post['box_metrics'] as $single_metric) {?>
						    <li>
								<div class="box-metric <?php echo $single_metric['color_class'] ?>">
									<small>
										<i class="<?php echo $single_metric['icon_image'] ?>"></i>
									<?php echo $single_metric['icon_text'] ?>
									</small>
									<h3>
										<?php echo $single_metric['number'] ?>
									</h3>
									<p><?php echo $single_metric['copy'] ?></p>
								</div>
							</li>
							<?php } ?>
							<?php } ?>

						</ul>
					</div>
			</div>
		</section>

		<?php } ?>
