<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Software

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>

		<!-- BOX TEXT -->		

				<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball align-center">
			<div class="container">
				<h2 class="margin-bottom-90"><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
				<img src="<?php echo $section_1['section_1_image'];  ?>" class="responsive" alt="">
			</div>
		</section>
		<?php } ?>


		<!-- BOX BLUE FPO -->

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


		<section class="box-text-top container-normal align-center">
			<div class="container">
				<h2 class="margin-bottom-90">Competitive Matrix</h2>

				<div class="wrapperTable">
					<div class="contTr contTrHeader">
						<div class="contTdOne contTdOneHeader"></div>
						<div class="contTdTwo contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand.png" alt=""></div>
						<div class="contTdThree contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand-zendesk.png" alt=""></div>
						<div class="contTdFour contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand-upwork.png" alt=""></div>
						<div class="contTdFive contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand-mailchimp.png" alt=""></div>
						<div class="contTdSix contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand-task.png" alt=""></div>
						<div class="contTdSeven contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand-double.png" alt=""></div>
						<div class="contTdEight contTdTwoHeaders"><img src="<?php bloginfo('template_url'); ?>/images/brand-woo.png" alt=""></div>
					</div>
				</div>
				<div class="wrapperTable tableShadow">	

					<h3 class="title-head">Machine Learning</h3>			
					
					<div class="contTr">
						<div class="contTdOne">Machine Learning</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"></div>
						<div class="contTdFour"></div>
						<div class="contTdFive"><i class="fa fa-check"></i></div>
						<div class="contTdSix"><i class="fa fa-check"></i></div>
						<div class="contTdSeven"></div>
						<div class="contTdEight"></div>
					</div>
					
					<h3 class="title-head">Artificial Intelligence</h3>
				
					<div class="contTr">
						<div class="contTdOne">Artificial Intelligence</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"></div>
						<div class="contTdFour"><i class="fa fa-check"></i></div>
						<div class="contTdFive"></div>
						<div class="contTdSix"><i class="fa fa-check"></i></div>
						<div class="contTdSeven"></div>
						<div class="contTdEight"><i class="fa fa-check"></i></div>
					</div>
					
					<h3 class="title-head">Transparent Metrics</h3>
				
					<div class="contTr">
						<div class="contTdOne">Transparent Metrics</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"><i class="fa fa-check"></i></div>
						<div class="contTdFour"></div>
						<div class="contTdFive"></div>
						<div class="contTdSix"></div>
						<div class="contTdSeven"><i class="fa fa-check"></i></div>
						<div class="contTdEight"><i class="fa fa-check"></i></div>
					</div>

					<h3 class="title-head">Advanced Science</h3>

					<div class="contTr">
						<div class="contTdOne">Advanced Science</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"><i class="fa fa-check"></i></div>
						<div class="contTdFour"></div>
						<div class="contTdFive"><i class="fa fa-check"></i></div>
						<div class="contTdSix"></div>
						<div class="contTdSeven"></div>
						<div class="contTdEight"></div>
					</div>

					<h3 class="title-head">Machine Learning</h3>

					<div class="contTr">
						<div class="contTdOne">Machine Learning</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"></div>	
						<div class="contTdFour"><i class="fa fa-check"></i></div>
						<div class="contTdFive"></div>
						<div class="contTdSix"><i class="fa fa-check"></i></div>
						<div class="contTdSeven"></div>
						<div class="contTdEight"><i class="fa fa-check"></i></div>
					</div>
					
					<h3 class="title-head">Artificial Intelligence</h3>

					<div class="contTr">
						<div class="contTdOne">Artificial Intelligence</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"><i class="fa fa-check"></i></div>
						<div class="contTdFour"></div>
						<div class="contTdFive"><i class="fa fa-check"></i></div>
						<div class="contTdSix"></div>
						<div class="contTdSeven"><i class="fa fa-check"></i></div>
						<div class="contTdEight"></div>
					</div>

					<h3 class="title-head">Transparent Metrics</h3>

					<div class="contTr">
						<div class="contTdOne">Transparent Metrics</div>
						<div class="contTdTwo"><i class="fa fa-check"></i></div>
						<div class="contTdThree"></div>
						<div class="contTdFour"><i class="fa fa-check"></i></div>
						<div class="contTdFive"></div>
						<div class="contTdSix"><i class="fa fa-check"></i></div>
						<div class="contTdSeven"><i class="fa fa-check"></i></div>
						<div class="contTdEight"></div>
					</div>
	
				</div>
			</div>
		</section>

		<div class="cool-sep"></div>

		<section class="box-text-top bkg-none align-center">
			<div class="container">
				<h2>Lorem Ipsum Features Headline</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonummy nibh euismod tinci dunt ut laoreet dolore magna.</p>
			</div>
		</section>

		<!-- WHATS IS SOLVVY -->

		<section class="whats-solvvy bkg-none vertical-align-middle">
			<div class="col-left">

				<select class="solutions" id="solutions">
					<option value="tab1">SUPPORT</option>
					<option value="tab2">CUSTOMER SUPPORT</option>
					<option value="tab3">FINANCE</option>
				</select>

				<div class="tab-link-without-icon" data-value="tab1">
					<h4>Feature Name</h4>
					<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha.</p>
				</div>
				<div class="tab-link-without-icon" data-value="tab2">
					<h4>Feature Name</h4>
					<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha.</p>
				</div>
				<div class="tab-link-without-icon" data-value="tab3">
					<h4>Feature Name</h4>
					<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha.</p>
				</div>

			</div>
			<div class="col-right">

				<div class="" id="tab1">
					<img src="<?php bloginfo('template_url'); ?>/images/tab1.png" class="responsive" alt="">
				</div>
				<div class="" id="tab2">
					<img src="<?php bloginfo('template_url'); ?>/images/tab2.png" class="responsive" alt="">
				</div>
				<div class="" id="tab3">
					<img src="<?php bloginfo('template_url'); ?>/images/tab3.png" class="responsive" alt="">
				</div>

			</div>


		</section>

		<div class="cool-sep"></div>

		
<?php get_footer(); ?>