<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Blog

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER BLOG -->
		
		<section class="hero-banner-blog">
			<div class="container">
				<h1>Solvvy Blog</h1>
			</div>
		</section>

		<!-- BOX FOLLOW US -->

		<section class="box-gray marketo-follow-us">
			<div class="container">
				<ul class="formated-list">
					<li><h4>FOLLOW US</h4></li>
					<li>
					<script src="//app-ab24.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_1227" class="marketo-updates"></form>
					<script>MktoForms2.loadForm("//app-ab24.marketo.com", "733-WJM-922", 1227);</script>
					<!--
						<form action="" class="marketo-updates">
							<input type="text" placeholder="you@email.com">
							<button>Send Me Updates!</button>
						</form>
						-->
					</li>
					<li>
						<?php $socialMedia = get_field('social_media', 'option'); ?>

						<?php if($socialMedia['twitter']){ ?><a href="<?php echo $socialMedia['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php } ?>
						<?php if($socialMedia['linkedin']){ ?><a href="<?php echo $socialMedia['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php } ?>
						<?php if($socialMedia['facebook']){ ?><a href="<?php echo $socialMedia['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php } ?>						
					</li>
				</ul>
			</div>
		</section>
		
		<!-- BOX TEXT -->

		<section class="blog-content">
			
				
				<?php $loop = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="container">
				<!-- POST -->

				<?php if( get_field('waves') == 'red' ) { 
					$class = 'with-waves-on-top';
				 } elseif ( get_field('waves') == 'blue' ) { 
					$class = 'with-waves-on-top';
				 } else { 
					$class = '';
				 } ?>

				<?php if( get_field('waves_bot') == 'red' ) { 
					$classb = 'with-waves-on-bottom';
				 } elseif ( get_field('waves_bot') == 'blue' ) { 
					$classb = 'with-waves-on-bottom';
				 } else { 
					$classb = '';
				 } ?>
				
				<div class="box-post <?php echo $class ?> <?php echo $classb ?>">
					
					<?php if( get_field('waves') == 'blue' ) { ?>
					<svg class="waves-on-top" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 825 82.81"><title>wave</title><path d="M825,20.24H0v48c300.77,36.57,557.87-9,825-11Z" transform="translate(0 0.44)" style="fill:#bdb2f2"/><path d="M825-.44H0V66.09c98.56,4.31,242.35,1.44,480.54-19.4C587.08,37.37,705.66,42.08,825,49.34Z" transform="translate(0 0.44)" style="fill:#725ab4"/></svg>
					 <?php } ?>
					 <?php if ( get_field('waves') == 'red') { ?>
					<svg class="waves-on-top" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 825 82.81"><title>wave</title><path d="M825,20.24H0v48c300.77,36.57,557.87-9,825-11Z" transform="translate(0 0.44)" style="fill:#fe92bb;opacity:0.3499999940395355;isolation:isolate"/><path d="M825-.44H0V66.09c98.56,4.31,242.35,1.44,480.54-19.4C587.08,37.37,705.66,42.08,825,49.34Z" transform="translate(0 0.44)" style="fill:#fa3777"/></svg>
					<?php } ?>
					

					<div class="content-avatar">
						<figure class="avatar">
							<?php
					    	    $attachment_id = get_field('avatar');
					    	    $size = "avatar";
					    	    $image = wp_get_attachment_image_src( $attachment_id, $size );
					    	?>
					    	<img src= "<?php echo $image[0]; ?>" class="responsive" alt="" />
						</figure>
					</div>
					<h2><?php the_title(); ?></h2>
					<small><a href="javascript:void(0);" class="link-author"><?php the_field('name'); ?></a> on <?php the_time('j F, Y'); ?>
						<div class="popup-author">
							<figure class="avatar">
								<?php
					    	    $attachment_id = get_field('avatar');
					    	    $size = "avatar";
					    	    $image = wp_get_attachment_image_src( $attachment_id, $size );
					    	?>
					    	<img src= "<?php echo $image[0]; ?>" class="responsive" alt="" />
							</figure>
							<h2><?php the_field('name'); ?></h2>
							<h3><?php the_field('position'); ?></h3>
							<p><?php the_field('bio'); ?></p>
						</div>
					</small>
					<p><?php the_field('excerpt'); ?></p>
					<div class="hidden-info">
						<?php the_post_thumbnail( 'inner-post', array( 'class' => 'responsive' ) ); ?>
						<?php the_field('copy'); ?>
					</div>
					<a href="javascript:void(0);" class="button-more">READ MORE</a>
					
					<?php if( get_field('waves_bot') == 'red' ) { ?>
					<svg class="waves-on-bottom" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1657 134.52"><title>wave-top</title><path d="M1657,173V92c-222.29,15.82-453.31,37.81-652.11,5.85C275.33-19.45,191.35,69.61,0,90.44v79.3L121.44,173Z" transform="translate(0 -38.45)" style="fill:#fe92bb;opacity:0.3499999940395355;isolation:isolate"/><path d="M1657,173V44.1c-183.6,31.36-380.1,76.73-532.61,88.19C752,160.27,403.57,4.84,0,64.52V173Z" transform="translate(0 -38.45)" style="fill:#fa3777"/></svg>
					 <?php } ?>
					 <?php if ( get_field('waves_bot') == 'blue') { ?>
					<svg class="waves-on-bottom" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1657 134.52"><title>wave-top</title><path d="M1657,173V92c-222.29,15.82-453.31,37.81-652.11,5.85C275.33-19.45,191.35,69.61,0,90.44v79.3L121.44,173Z" transform="translate(0 -38.45)" style="fill:#bdb2f2"/><path d="M1657,173V44.1c-183.6,31.36-380.1,76.73-532.61,88.19C752,160.27,403.57,4.84,0,64.52V173Z" transform="translate(0 -38.45)" style="fill:#725ab4"/></svg>
					<?php } ?>

				</div>
				</div>
				<?php $postID = get_the_ID(); ?>
				
				<?php if( have_rows('blue_box', 517) ):
					while( have_rows('blue_box', 517) ): the_row();
					$afterPost = get_sub_field('under_post', 517); 
						if( $afterPost ): 
							$post = $afterPost;
							setup_postdata( $post );
							$afterPostID = get_the_ID();
								if( $postID == $afterPostID ): ?>
		<div class="line-height"><img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive"></div>
		<div class="blue-box-waves">
			<div class="container">
				<div class="image">
					<img src="<?php the_sub_field('image'); ?>" class="responsive" alt="">
				</div>
				<div class="info">
					<h2><?php the_sub_field('title'); ?></h2>
					<p><?php the_sub_field('copy'); ?></p>
					<a href="<?php if(get_sub_field('type_link') == 'url'){ ?><?php the_sub_field('link_button'); ?><?php } else if(get_sub_field('type_link') == 'pdf'){?><?php the_sub_field('link_pdf'); ?><?php } ?>" class="button-tn" target="<?php the_sub_field('open_link_in_a_new_tab'); ?>"><?php the_sub_field('text_button'); ?></a>
				</div>
			</div>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive blog-img">
				<?php
							endif;
						 endif;
					 endwhile; 
				 endif;
				 ?>

				<?php endwhile; wp_reset_query(); ?>

			

		</section>
		
		<div class="cool-sep"></div>
		
<?php get_footer(); ?>