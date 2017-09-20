<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Solvvy
 * 
 */

get_header(); ?>

		<section class="hero-banner-blog">
			<div class="container">
				<h1>Page Not Found</h1>
			</div>
		</section>
		<section class="box-text-top bkg-pink">
			<div class="container" >
				<h2 class="margin-bottom-90">We can't seem to find the page you're looking for!</h2>
				<p style="text-align: center;">The page you're looking for appears to have been moved, deleted or does not exist. <br>
				Please try using the navigation above or go back to the homepage. </p>
				<a href="<?php echo home_url(); ?>" class="button">Go back</a>
			</div>
		</section>
<?php get_footer(); ?>