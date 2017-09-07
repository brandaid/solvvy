<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template News and Press

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- HERO BANNER -->


		<section class="hero-banner hero-banner-interior">
			<div class="container">
				<h1>News & Press Releases</h1>
				<h3>Bacon ipsum dolor amet bacon tenderloin landjaeger, turkey short loin.</h3>
			</div>
			<div class="waves"></div>
			<div class="circles"></div>
		</section>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball title-to-left">
			<div class="container">
				<h2>Featured Stories</h2>

				<ul class="list-boxes-three three-ipad">
					<li>
						<div class="box-stories">
							<div class="content-brand">
								<div class="content-img">
									<img src="<?php bloginfo('template_url'); ?>/images/brand-wsj.png" alt="" class="responsive">
								</div>
							</div>
							<div class="content">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p>News Source Name <span>Month 15, 2017</span></p>
								<a href="" class="button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-stories">
							<div class="content-brand">
								<div class="content-img">
									<img src="<?php bloginfo('template_url'); ?>/images/brand-cnbc.png" alt="" class="responsive">
								</div>
							</div>
							<div class="content">
								<h3><a href="">5 Ways to Rock Your Profile Shot Like a Boss</a></h3>
								<p>News Source Name <span>Month 15, 2017</span></p>
								<a href="" class="button">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-stories">
							<div class="content-brand">
								<div class="content-img">
									<img src="<?php bloginfo('template_url'); ?>/images/brand-techcrunch.png" alt="" class="responsive">
								</div>
							</div>
							<div class="content">
								<h3><a href="">Hottest Stars of Startups Flying Under the Radar</a></h3>
								<p>News Source Name <span>Month 15, 2017</span></p>
								<a href="" class="button">Read More</a>
							</div>
						</div>
					</li>
				</ul>

			</div>
		</section>

		<div class="cool-sep"></div>
		
		<div class="content-button">
			<a href="javascript:void(0);" class="open-div">Filter Resources</a>
		</div>
		<div id="show-all-none">
			<section class="box-filters" id="filters">
				<div class="container">
					<ul class="formated-list">
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
						    <label for="styled-checkbox-1">White Papers</label>
						</li>
						<li>
						    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2">
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

			<section class="section-assets-cards">
				<div class="container">
					<ul class="list-boxes-three">
						<li>
							<div class="asset-cards">
								<img src="<?php bloginfo('template_url'); ?>/images/asset-cards.jpg" alt="" class="responsive">
								<div class="content">
									<small>Webinar</small>
									<h3><a href="">Delivering Intelligent, Omnichannel Self-Service</a></h3>
									<p>Mauris commodo quam augue, nec tristique ligula faucibus at. Ut porttitor venenatis lorem, quis.</p>
									<a href="" class="button">Watch Now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="asset-cards">
								<img src="<?php bloginfo('template_url'); ?>/images/asset-cards.jpg" alt="" class="responsive">
								<div class="content">
									<small>Webinar</small>
									<h3><a href="">Delivering Intelligent, Omnichannel Self-Service</a></h3>
									<p>Mauris commodo quam augue, nec tristique ligula faucibus at. Ut porttitor venenatis lorem, quis.</p>
									<a href="" class="button">Watch Now</a>
								</div>
							</div>
						</li>
						<li>
							<div class="asset-cards">
								<img src="<?php bloginfo('template_url'); ?>/images/asset-cards.jpg" alt="" class="responsive">
								<div class="content">
									<small>Webinar</small>
									<h3><a href="">Delivering Intelligent, Omnichannel Self-Service</a></h3>
									<p>Mauris commodo quam augue, nec tristique ligula faucibus at. Ut porttitor venenatis lorem, quis.</p>
									<a href="" class="button">Watch Now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>

		</div>

		<section class="box-gray marketo-newsletter">
			<div class="container">
				<ul>
					<li><p>Get <b>FREE</b> tools and best practices from Solvvy</p></li>
					<li>
						<form action="">
							<input type="text" placeholder="you@email.com">
							<button>Send Me Updates!</button>
						</form>
					</li>
					<li><p>We respect your privacy.</p></li>
				</ul>
			</div>
		</section>


		
<?php get_footer(); ?>