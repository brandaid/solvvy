<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Newsletter

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball padding-top">
			<div class="container">

				<ul class="list-boxes-three align-left">
					<?php $loop = new WP_Query( array( 'post_type' => 'newsletter', 'order' => 'DESC' ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li>
						<div class="the-post">
							<?php the_post_thumbnail( 'newsletter', array( 'class' => 'responsive' ) ); ?>
							<div class="content">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<small><?php the_time('j F, Y'); ?></small>
								<a href="<?php the_permalink(); ?>" class="button">Read Now</a>
							</div>
						</div>
					</li>
				<?php $postID = get_the_ID(); ?>
<?php
$afterPost = get_field('post_pe', 23);
if( $afterPost ): 
	// override $post
	$post = $afterPost;
	setup_postdata( $post );
	$afterPostID = get_the_ID();
	if( $postID == $afterPostID ): ?> 
    <div class="news">
					<form id="newsletterForm">
					<h3 class="underlined">Be informed</h3>
					<p>See what drives us and the community foward with curated content in your inbox</p>
					<div class="labels">
					<div class="first"><label for="name">First Name</label><br>
					<input id="name" type="text" name="name"><br>
					<label for="lname">Last Name</label><br>
					<input id="lname" type="text" name="lastname"><br></div>
					<div class="sec"><label for="email">Email Address</label><br>
					<input id="email" type="text" name="email"><br>
					<input type="submit" value="Subscribe" id="submit" class="button"></div>
					</div>
					</form>
    </div>
<?php endif; 
endif; ?>

					<?php endwhile; wp_reset_query(); ?>
				</ul>	
			</div>


		</section>

		<div class="content-button">
			<a href="#" id="loadMore" class="button-white">Load More</a>
		</div>
		
		<div class="cool-sep"></div>
		
<?php get_footer(); ?>