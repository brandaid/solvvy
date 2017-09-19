		<!-- SECTION METRICS -->
		
				<?php while(has_sub_field('section_5')): ?>
				<section class="metrics">
				<div class="container">
				<div class="col-left">					
						<?php if(get_sub_field('sec5_text')): ?><h3 class="text-underlined"><?php the_sub_field('sec5_text'); ?></h3><?php endif; ?>
						<?php if(get_sub_field('sec5_button')): ?>
								<?php 
								$link = get_sub_field('sec5_button');
								if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" class="button"><?php echo $link['title']; ?></a>
								<?php endif; ?>
						<?php endif; ?>
						 
					<?php endwhile; ?>
				</div>
				<div class="col-right">
					<ul>

				<?php while(has_sub_field('section_5')): ?>
								
				<?php if(get_sub_field('box_metrics')): ?>
					<?php 
					    
					if( have_rows('box_metrics') ):

					    while( have_rows('box_metrics') ) : the_row(); 
					        
					        ?>

					    <li>
							<div class="box-metric <?php the_sub_field('color_class'); ?>">
								<small>
									<i class="icon-monitor"></i>
								<?php the_sub_field('icon_text'); ?>
								</small>
								<h3>
									<?php the_sub_field('number'); ?>
								</h3>
								<p><?php the_sub_field('copy'); ?></p>
							</div>
						</li>
							<?php
								
					    endwhile;

					endif;

					?>
				<?php endif; ?>
							 
				<?php endwhile; ?>

					</ul>
				</div>
			</div>
		</section>