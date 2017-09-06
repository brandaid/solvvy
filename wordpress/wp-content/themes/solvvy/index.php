<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Home

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		<!-- HERO BANNER -->

		<section class="hero-banner">
			<div class="container">
				<h1>Unlock the power of you enterprise knowledge</h1>
				<h3>Solvvy is behind some of the world's most advanced machine learning, artificial intelligence and natural language science.</h3>
				<a href="#" class="button" id="myBtn">WATCH <i class="icon-play"></i></a>
			</div>
			<div class="waves"></div>
			<div class="circles"></div>
		</section>

		<!-- WHATS IS SOLVVY -->

		<section class="whats-solvvy">
			<div class="col-left">
				<h2>What is Solvvy?</h2>
				<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone shankle corned beef sirloin picanha beef ribs jowl alcatra chicken. </p>
				<a href="" class="button">Learn More</a>
			</div>
			<div class="col-right">
				<img src="<?php bloginfo('template_url'); ?>/images/screen.gif" class="screen" alt="">
			</div>
		</section>

		<!-- INDUSTRY NEWS -->
		
		<section class="box-gray industry-news">
			<div class="container">
				<h3>INDUSTRY NEWS</h3>
				<hr>
				<img src="<?php bloginfo('template_url'); ?>/images/techcrunch.png" alt="">
				<p>Strip steak doner bacon capicola. Ribeye swine sirloin, kielbasa shankle tail pork chop t-bone short ribs jerky. Kevin brisket hamburger.</p>
				<hr>
				<a href="">Read More &raquo;</a>
			</div>
		</section>

		<!-- DRIVING COMPANIES -->

		<section class="driving-companies">
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

		<!-- SLIDER OF BRANDS -->

		<section>
			<div class="container">

				<div class="cool-sep top"></div>
				
				<section class="buttons-brand">
					
					<div class="owl-carousel owl-navbars">
					
						<div class="item">
							<a class="button-brand" href="#uno"><img src="<?php bloginfo('template_url'); ?>/images/br-amazon.png" alt=""></a>
						</div>
						<div class="item">
							<a class="button-brand" href="#dos"><img src="<?php bloginfo('template_url'); ?>/images/br-lithium.png" alt=""></a>
						</div>
						<div class="item">
							<a class="button-brand" href="#tres"><img src="<?php bloginfo('template_url'); ?>/images/br-evite.png" alt=""></a>
						</div>
						<div class="item">
							<a class="button-brand" href="#cuatro"><img src="<?php bloginfo('template_url'); ?>/images/br-optimizely.png" alt=""></a>
						</div>
						<div class="item">
							<a class="button-brand" href="#cinco"><img src="<?php bloginfo('template_url'); ?>/images/br-shopify.png" alt=""></a>
						</div>

					</div>

				</section>

				
				<div class="owl-carousel owl-brands">
				    <div class="item" data-hash="uno">
						<article class="brands">
							<div class="col-left">
								<img src="<?php bloginfo('template_url'); ?>/images/br-amazon.png" alt="">
								<p>Within 00 days of signing up for Solvvy, Optimizely instantly resolved 28% of its inbound support tickets.</p>
								<a href="" class="button">Read Their Story</a>
							</div>
							<div class="col-right">
								<figure class="image-slider">
									<img src="<?php bloginfo('template_url'); ?>/images/image-slider-brand.jpg" alt="">
								</figure>
							</div>
						</article>
				    </div>
				    <div class="item" data-hash="dos">
				    	<article class="brands">
							<div class="col-left">
								<img src="<?php bloginfo('template_url'); ?>/images/br-lithium.png" alt="">
								<p>Within 00 days of signing up for Solvvy, Optimizely instantly resolved 28% of its inbound support tickets.</p>
								<a href="" class="button">Read Their Story</a>
							</div>
							<div class="col-right">
								<figure class="image-slider">
									<img src="<?php bloginfo('template_url'); ?>/images/image-slider-brand.jpg" alt="">
								</figure>
							</div>
						</article>
				    </div>
				    <div class="item" data-hash="tres">
				    	<article class="brands">
							<div class="col-left">
								<img src="<?php bloginfo('template_url'); ?>/images/br-evite.png" alt="">
								<p>Within 00 days of signing up for Solvvy, Optimizely instantly resolved 28% of its inbound support tickets.</p>
								<a href="" class="button">Read Their Story</a>
							</div>
							<div class="col-right">
								<figure class="image-slider">
									<img src="<?php bloginfo('template_url'); ?>/images/image-slider-brand.jpg" alt="">
								</figure>
							</div>
						</article>
				    </div>
				    <div class="item" data-hash="cuatro">
				    	<article class="brands">
							<div class="col-left">
								<img src="<?php bloginfo('template_url'); ?>/images/br-optimizely.png" alt="">
								<p>Within 00 days of signing up for Solvvy, Optimizely instantly resolved 28% of its inbound support tickets.</p>
								<a href="" class="button">Read Their Story</a>
							</div>
							<div class="col-right">
								<figure class="image-slider">
									<img src="<?php bloginfo('template_url'); ?>/images/image-slider-brand.jpg" alt="">
								</figure>
							</div>
						</article>
				    </div>
				    <div class="item" data-hash="cinco">
				    	<article class="brands">
							<div class="col-left">
								<img src="<?php bloginfo('template_url'); ?>/images/br-shopify.png" alt="">
								<p>Within 00 days of signing up for Solvvy, Optimizely instantly resolved 28% of its inbound support tickets.</p>
								<a href="" class="button">Read Their Story</a>
							</div>
							<div class="col-right">
								<figure class="image-slider">
									<img src="<?php bloginfo('template_url'); ?>/images/image-slider-brand.jpg" alt="">
								</figure>
							</div>
						</article>
				    </div>
				</div>
			</div>
		</section>
		<div class="cool-sep"></div>

		<!-- SECTION METRICS -->
		
		<section class="metrics">
			<div class="container">
				<div class="col-left">
					<h3 class="text-underlined">The only <span>search platform</span> designed for the modern enterprise</h3>
					<a href="" class="button">Request Demo</a>
				</div>
				<div class="col-right">
					<ul>
						<li>
							<div class="box-metric">
								<small>
									<i class="icon-monitor"></i>
									LOREM IPSUM
								</small>
								<h3>
									9.7
								</h3>
								<p>Bacon ipsum dolor amet sausage  to landjaeger strip steak, filet mignon et spare ribs t-bone.</p>
							</div>
						</li>
						<li>
							<div class="box-metric red">
								<small>
									<i class="icon-search"></i>
									LOREM IPSUM
								</small>
								<h3>
									23%
								</h3>
								<p>Bacon ipsum dolor amet sausage  to landjaeger strip steak, filet mignon et spare ribs t-bone.</p>
							</div>
						</li>
						<li>
							<div class="box-metric lighten">
								<small>
									<i class="icon-headphones"></i>
									LOREM IPSUM
								</small>
								<h3>
									85%
								</h3>
								<p>Bacon ipsum dolor amet sausage  to landjaeger strip steak, filet mignon et spare ribs t-bone.</p>
							</div>
						</li>
						<li>
							<div class="box-metric lighten2">
								<small>
									<i class="icon-window"></i>
									LOREM IPSUM
								</small>
								<h3>
									500
								</h3>
								<p>Bacon ipsum dolor amet sausage  to landjaeger strip steak, filet mignon et spare ribs t-bone.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<div class="cool-sep"></div>

		<!-- SECTION INDUSTRY -->

		<section class="solution-for-industry">
			<div class="container">
				<h2>The Right Solution for your Industry</h2>
				
				<div class="columns-solutions">
					
					<div class="col-left">
				
						<select class="solutions" id="solutions">
							<option value="role">For Your Role</option>
							<option value="business">For Your Business Type</option>
							<option value="industry">For Your Industry</option>
						</select>

						<div class="tab-link tab-role" data-value="role">
							<h4><i class="icon-whatsapp"></i>FOR YOUR ROLE</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link tab-business" data-value="business">
							<h4><i class="icon-barcode-scan"></i>For Your Business Type</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>
						<div class="tab-link tab-industry" data-value="industry">
							<h4><i class="icon-bowl"></i>For Your Industry</h4>
							<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
						</div>

					</div>

					<div class="col-right">
						<div class="panel-solution panel-role" id="panel-role">
							<ul>
								<li>
									<h4><i class="icon-headphones"></i>SUPPORT</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
								<li>
									<h4><i class="icon-smiley"></i>Customer Experience</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
								<li>
									<h4><i class="icon-atm"></i>Finance</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
							</ul>
						</div>
						<div class="panel-solution panel-business"  id="panel-business">
							<ul>
								<li>
									<h4><i class="icon-headphones"></i>SUPPORT</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
								<li>
									<h4><i class="icon-smiley"></i>Customer Experience</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
								<li>
									<h4><i class="icon-atm"></i>Finance</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
							</ul>
						</div>
						<div class="panel-solution panel-industry" id="panel-industry">
							<ul>
								<li>
									<h4><i class="icon-headphones"></i>SUPPORT</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
								<li>
									<h4><i class="icon-smiley"></i>Customer Experience</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
								<li>
									<h4><i class="icon-atm"></i>Finance</h4>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone. shankle corned beef sirloin picanha beef ribs jowl alcatra chicken.</p>
								</li>
							</ul>
						</div>

					</div>

				</div>
				
			</div>
		</section>


		<!-- Trigger/Open The Modal -->

		<!-- The Modal -->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <div class="videoWrapper">
		    	<iframe src="https://player.vimeo.com/video/217907071" width="640" height="360" id="video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		    </div>
		  </div>

		</div>
<?php get_footer(); ?>

