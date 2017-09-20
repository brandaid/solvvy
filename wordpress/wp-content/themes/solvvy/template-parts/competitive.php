		<section class="box-text-top container-normal align-center">
			<div class="container">
					<?php while(has_sub_field('competitive_matrix')): ?>			
						<?php if(get_sub_field('matrix_title')): ?><h2 class="margin-bottom-90"><?php the_sub_field('matrix_title'); ?></h2><?php endif; ?>
					<?php endwhile; ?>
					<div class="wrapperTable">
					<div class="contTr contTrHeader">
						<div class="contTdOne contTdOneHeader"></div>
				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php the_sub_field('brand_class'); ?> contTdTwoHeaders"><img src="<?php the_sub_field('brand_image'); ?>" alt=""></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					</div>

				<div class="wrapperTable tableShadow">	

					<h3 class="title-head">Present Actual Answers from KB instead of whole articles</h3>			
					<div class="contTr">
						<div class="contTdOne">Present Actual Answers from KB instead of whole articles</div>
				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature1'); ?></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					
					<h3 class="title-head">Language Understanding Goes Beyond Keywords</h3>
				
					<div class="contTr">
						<div class="contTdOne">Language Understanding Goes Beyond Keywords</div>

				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature2'); ?></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					
					<h3 class="title-head">Consumer Facing</h3>
				
					<div class="contTr">
						<div class="contTdOne">Consumer Facing</div>
					
					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature3'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>

					<h3 class="title-head">Rapid Deployment</h3>

					<div class="contTr">
						<div class="contTdOne">Rapid Deployment</div>

					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature4'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>

					<h3 class="title-head">Continuous Learning</h3>

					<div class="contTr">
						<div class="contTdOne">Continuous Learning</div>
					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature5'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>
					
					<h3 class="title-head">Omnichannel</h3>

					<div class="contTr">
						<div class="contTdOne">Omnichannel</div>

					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php the_sub_field('brand_class'); ?>"><?php the_sub_field('feature6'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>

					</div>
				</div>
			</div>
		</section>