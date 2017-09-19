<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Solutions Lander

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- SECTION 1 -->
		
		<?php get_template_part( 'template-parts/section1' ); ?>		

		<!-- PANELS -->


		<section class="solution-for-industry">
			<div class="container">
				
				<div class="columns-solutions">
					
					<div class="col-left">
				
						<select class="solutions" id="solutions">
							<option value="role">SUPPORT</option>
							<option value="business">CUSTOMER SUPPORT</option>
							<option value="industry">FINANCE</option>
						</select>

						<div class="tab-link" data-value="role">
							<h4><i class="icon-whatsapp"></i>SUPPORT</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" data-value="business">
							<h4><i class="icon-smiley"></i>CUSTOMER SUPPORT</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" data-value="industry">
							<h4><i class="icon-atm"></i>FINANCE</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>

					</div>

					<div class="col-right">
						<div class="panel-solution panel-role" id="panel-role">
							<ul>
								<li>
									<h4>LABEL</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
									<a href="" class="button-tn">VIEW MORE</a>
								</li>
							</ul>
						</div>
						<div class="panel-solution"  id="panel-business">
							<ul>
								<li>
									<h4>LABEL</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
									<a href="" class="button-tn">VIEW MORE</a>
								</li>
							</ul>
						</div>
						<div class="panel-solution" id="panel-industry">
							<ul>
								<li>
									<h4>LABEL</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
									<a href="" class="button-tn">VIEW MORE</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
		</section>

		<section class="solution-for-industry tab-panels">
			<div class="container">
				
				<div class="columns-solutions">
					
					<div class="col-left">

						<div class="tab-link active" rel="panel1">
							<h4><i class="icon-whatsapp"></i>SUPPORT</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" rel="panel2">
							<h4><i class="icon-smiley"></i>CUSTOMER SUPPORT</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" rel="panel3">
							<h4><i class="icon-atm"></i>FINANCE</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" rel="panel4">
							<h4><i class="icon-atm"></i>FINANCE</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" rel="panel5">
							<h4><i class="icon-atm"></i>FINANCE</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link" rel="panel6">
							<h4><i class="icon-atm"></i>FINANCE</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>

      				</div>

					<div class="col-right">

						<div class="panel active" id="panel1">
							<h4>LABEL 1</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<a href="" class="button-tn">VIEW MORE</a>	
						</div>
						<div class="panel" id="panel2">
							<h4>LABEL 2</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<a href="" class="button-tn">VIEW MORE</a>
						</div>
						<div class="panel" id="panel3">
							<h4>LABEL 3</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<a href="" class="button-tn">VIEW MORE</a>
						</div>
						<div class="panel" id="panel4">
							<h4>LABEL 4</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<a href="" class="button-tn">VIEW MORE</a>
						</div>
						<div class="panel" id="panel5">
							<h4>LABE 5L</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<a href="" class="button-tn">VIEW MORE</a>
						</div>
						<div class="panel" id="panel6">
							<h4>LABEL 6</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
							<a href="" class="button-tn">VIEW MORE</a>
						</div>
				    </div>
				</div>
			</div>
		</section>	

		<!-- DRIVING COMPANIES -->
		

		<section class="box-gray driving-companies driving-interior">
			<div class="container">
				<h3>Driving Search at some of the world’s smartest companies</h3>
				<ul>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving1.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving2.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving3.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving4.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving5.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving6.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving7.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/images/driving8.png" alt=""></li>
				</ul>
			</div>
		</section>


		<!-- SECONDARY BANNER -->
		<?php $section_secondary_banner = get_field('section_secondary_banner'); ?>
		<?php if($section_secondary_banner): ?>
		<section class="box-partners">
			<div class="container">
				<h2><?php the_field('secondary_banner_quote') ?></h2>
				<?php if(get_field('secondary_banner_quote_author')): ?><small><?php the_field('secondary_banner_quote_author') ?></small><?php endif ?>
				<img src="<?php if(get_field('secondary_banner_customer_logo')): ?><?php the_field('secondary_banner_customer_logo') ?><?php else : ?><?php bloginfo('template_url'); ?>/images/box-brands.png <?php endif ?>" class="responsive brand" alt="">
			</div>
			<div class="waves"></div>
		</section>
		<?php endif ?>

		<!-- SECTION METRICS -->
		
				<?php while(has_sub_field('section_5', 5)): ?>
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

				<?php while(has_sub_field('section_5', 5)): ?>
								
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

		<!-- BOX BLUE FPO -->


		<section class="box-gray">
			<div class="container">
				<div class="blue-box">
					<div class="image">
						<img src="<?php if(get_field('asset_left_image')): ?><?php the_field('asset_left_image') ?><?php else : ?><?php bloginfo('template_url'); ?>/images/fpo.png <?php endif ?>" class="responsive" alt="">
					</div>
					<div class="info">
						<h2><?php the_field('asset_title') ?></h2>
						<p><?php the_field('asset_description') ?></p>
						<a href="<?php the_field('asset_button_destination') ?>" class="button-tn" target="_blank"><?php the_field('asset_button_left') ?></a>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>

