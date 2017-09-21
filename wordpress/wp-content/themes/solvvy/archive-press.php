<?php get_header(); ?>
<?php
/*
Template Name: Archive News
*/
?>



		<!-- HERO BANNER BLOG -->
		
		<section class="hero-banner-blog">
			<div class="container">
				<h2>Solvvy News</h2>
			</div>
		</section>

		<!-- SECTION 1 -->

		<section class="box-text-top box-gray-waves">
			<div class="container"  style="text-align: left;">
			<ul class="list-boxes-two">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<li>
					<article>
							<h3 class="titles-news"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<p class="data-article" style="margin: 14px 0;"><?php if(get_field('source_name')): ?><?php the_field('source_name') ?> - <?php endif ?><span><?php echo get_the_date(); ?></span></p>
							<a href="<?php the_permalink() ?>" class="button-pink" style="display: block;font-size: 16px;">Read More</a>
					</article>
				</li>
			<?php endwhile; endif; ?>
			</ul>
			</div>
		</section>


		
<?php get_footer(); ?>