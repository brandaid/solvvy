<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Resources

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->


		<section class="hero-banner hero-banner-interior">
			<div class="container">
				<h1>Solvvy Resources</h1>
				<h3>Bacon ipsum dolor amet bacon tenderloin landjaeger, turkey short loin.</h3>
			</div>
			<div class="waves"></div>
			<div class="circles"></div>
		</section>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball">
			<div class="container">
				<h2>Featured Resources</h2>

				<ul class="list-boxes-three">
					<li>
						<div class="fpo-resources">
							<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
							<h3>Lorem Ipsum Name</h3>
							<p>Bacon ipsum dolor amet fatback jerky brisket cupim boudin ham hock hamburger. </p>
							<a href="" class="button">Download Now</a>
						</div>
					</li>
					<li>
						<div class="fpo-resources">
							<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
							<h3>Lorem Ipsum Name</h3>
							<p>Bacon ipsum dolor amet fatback jerky brisket cupim boudin ham hock hamburger. </p>
							<a href="" class="button">Download Now</a>
						</div>
					</li>
					<li>
						<div class="fpo-resources">
							<img src="<?php bloginfo('template_url'); ?>/images/fpo-cover.png" alt="" class="responsive">
							<h3>Lorem Ipsum Name</h3>
							<p>Bacon ipsum dolor amet fatback jerky brisket cupim boudin ham hock hamburger. </p>
							<a href="" class="button">Download Now</a>
						</div>
					</li>
				</ul>

			</div>
		</section>

		<div class="cool-sep"></div>
		
		<div class="content-button">
			<a href="javascript:void(0);" class="open-div">Filter Resources</a>
		</div>
		<section class="box-filters" id="filters">
			<div class="container">
				<ul class="formated-list">
					<li>
					    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
					    <label for="styled-checkbox-1">White Papers</label>
					</li>
					<li>
					    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2" checked>
					    <label for="styled-checkbox-2">Videos</label>
					</li>
					<li>
					    <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value4">
					    <label for="styled-checkbox-4">Webinar Replays</label>
					</li>
					<li>
					    <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value5">
					    <label for="styled-checkbox-5">Ebooks</label>
					</li>
					<li>
					    <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value6">
					    <label for="styled-checkbox-6">Data Sheets</label>
					</li>
					<li>
					    <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value7">
					    <label for="styled-checkbox-7">Case Studies</label>
					</li>
				</ul>
			</div>
		</section>

		<section class="box-gray industry-news">
			<div class="container">
				<ul>
					<li>Get FREE tools and best practices from Solvvy</li>
					<li>
						<form action="">
							<input type="text">
							<button></button>
						</form>
					</li>
					<li>We respect your privacy.</li>
				</ul>
			</div>
		</section>


		
<?php get_footer(); ?>