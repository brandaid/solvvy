<?php
		
		$matrix = get_field('competitive_matrix');	

		if( $matrix ): 

		$features = $matrix['competitive_features'];
		?>
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
					$count = 0;
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					      $count++;  ?>
						<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?> contTdTwoHeaders"><img src="<?php the_sub_field('brand_image'); ?>" alt=""></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					</div>

				<div class="wrapperTable tableShadow">	
					<?php if( $features ):  ?>
					<h3 class="title-head"><?php echo $features['feature_1'] ?></h3>	
					<div class="contTr">
						<div class="contTdOne"><?php echo $features['feature_1'] ?></div>
				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					$count = 0;
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					      $count++;  ?>
						<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?>"><?php the_sub_field('feature1'); ?></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					
					<h3 class="title-head"><?php echo $features['feature_2'] ?></h3>
				
					<div class="contTr">
						<div class="contTdOne"><?php echo $features['feature_2'] ?></div>

				<?php while(has_sub_field('competitive_matrix')): ?>
								
				<?php if(get_sub_field('table')): ?>
					<?php 
					if( have_rows('table') ):
					    while( have_rows('table') ) : the_row(); 
					        ?>
						<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?>"><?php the_sub_field('feature2'); ?></div>
					<?php
					    endwhile;
					endif;
					?>
				<?php endif; ?>						 
				<?php endwhile; ?>
					</div>
					
					<h3 class="title-head"><?php echo $features['feature_3'] ?></h3>
				
					<div class="contTr">
						<div class="contTdOne"><?php echo $features['feature_3'] ?></div>
					
					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?>"><?php the_sub_field('feature3'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>

					<h3 class="title-head"><?php echo $features['feature_4'] ?></h3>

					<div class="contTr">
						<div class="contTdOne"><?php echo $features['feature_4'] ?></div>

					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?>"><?php the_sub_field('feature4'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>

					<h3 class="title-head"><?php echo $features['feature_5'] ?></h3>

					<div class="contTr">
						<div class="contTdOne"><?php echo $features['feature_5'] ?></div>
					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?>"><?php the_sub_field('feature5'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>
					</div>
					
					<h3 class="title-head"><?php echo $features['feature_6'] ?></h3>

					<div class="contTr">
						<div class="contTdOne"><?php echo $features['feature_6'] ?></div>

					<?php while(has_sub_field('competitive_matrix')): ?>
									
					<?php if(get_sub_field('table')): ?>
						<?php 
						if( have_rows('table') ):
						    while( have_rows('table') ) : the_row(); 
						        ?>
							<div class="<?php if ($count == 1){ ?>contTdTwo <?php } elseif ($count == 2){ ?>contTdThree <?php } elseif ($count == 3){ ?>contTdFour <?php } elseif ($count == 4){ ?>contTdFive <?php } elseif ($count == 5){ ?>contTdSix <?php } elseif ($count == 6){ ?>contTdSeven<?php } ?>"><?php the_sub_field('feature6'); ?></div>
						<?php
						    endwhile;
						endif;
						?>
					<?php endif; ?>						 
					<?php endwhile; ?>

					</div>
					<?php endif ?>	
				</div>
			</div>
		</section>

		<?php endif; ?>