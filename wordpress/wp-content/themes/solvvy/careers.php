<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Careers

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>

		<!-- SECTION 1 -->
		
		<?php get_template_part( 'template-parts/section1' ); ?>

		<!-- SECONDARY BANNER -->

		<?php get_template_part( 'template-parts/secondarybanner' ); ?>

		<!-- SECTION ENGINEER SLIDER -->

		<?php get_template_part( 'template-parts/engineerslider' ); ?>

		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- SECTION BENEFITS -->

		<?php get_template_part( 'template-parts/benefits' ); ?>

		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- SPHERES METRICS-->

		<?php get_template_part( 'template-parts/metrics' ); ?>

		<!-- SEP -->
		
		<div class="cool-sep"></div>

		<!-- SECTION SALES SLIDER -->

		<?php get_template_part( 'template-parts/saleslider' ); ?>

		<!-- SECTION CLIENT TESTIMONIAL -->

		<?php get_template_part( 'template-parts/starscomment' ); ?>

		<!-- SECTION SLIDER BOTTOM TEAM -->

		<?php get_template_part( 'template-parts/teamslider' ); ?>

		<!-- SECTION JOIN US -->

		<?php get_template_part( 'template-parts/joinus' ); ?>

<?php get_footer(); ?>