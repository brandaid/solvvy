<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Customers

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->
		<?php get_template_part( 'template-parts/herobanner' ); ?>

		<!-- SECTION CASE OF STUDY -->
		<?php get_template_part( 'template-parts/caseofstudy' ); ?>

		<div class="cool-sep"></div>

		<!-- SECTION CUSTOMER TESTIMONIALS -->
		<?php get_template_part( 'template-parts/testimonials' ); ?>

		<!-- SECTION CUSTOMER BRANDS -->
		<?php get_template_part( 'template-parts/redirects' ); ?>
		
<?php get_footer(); ?>