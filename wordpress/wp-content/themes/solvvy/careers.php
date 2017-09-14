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

		<?php $section_hero = get_field('section_hero') ?>
		<?php if($section_hero){ ?>
			<?php if($section_hero['hero_background']){ ?>
			<section class="hero-banner hero-banner-interior" style="background-image: url(<?php echo $section_hero['hero_background']; ?>)">
			<?php }else{ ?>
			<section class="hero-banner hero-banner-interior">
			<?php } ?>
				<div class="container">
					<h1><?php echo $section_hero['hero_title'];  ?></h1>
					<h3><?php echo $section_hero['hero_copy'];  ?></h3>
				</div>
				<div class="waves"></div>
				<div class="circles"></div>
			</section>
		<?php } ?>

		<!-- SECTION 1 -->
		<?php $section_1 = get_field('section_1') ?>
		<?php if($section_1){ ?>
		<section class="box-text-top pink-ball bkg-pink">
			<div class="container">
				<h2 class="margin-bottom-90"><?php echo $section_1['section_1_title'];  ?></h2>
				<p><?php echo $section_1['section_1_copy'];  ?></p>
			</div>
		</section>
		<?php } ?>

		<!-- SECONDARY BANNER -->

		<?php $section_secondary_banner = get_field('section_secondary_banner'); ?>
		<?php if($section_secondary_banner){ ?>
		<?php if($section_secondary_banner['secondary_banner_image']){ ?>
			<section class="box-careers" style="background-image: url(<?php echo $section_secondary_banner['secondary_banner_image']['url']; ?>)">
		<?php }else{ ?>
			<section class="box-careers">
		<?php } ?>
				<div class="container">
					<h2><?php echo $section_secondary_banner['secondary_banner_title']; ?></h2>
				</div>
				<div class="waves"></div>
			</section>
		<?php } ?>

		<!-- SECTION ENGINEER SLIDER -->
		<?php $engineers = get_field('section_engineer_slider'); ?>
		<?php if($engineers['slider_elements']){ ?>
		<section class="slider-interior">
			<div class="container">
				<div class="owl-carousel owl-careers">	
					<?php forEach($engineers['slider_elements'] as $single_engineer){ ?>
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2><?php echo $single_engineer['slider_title'] ?></h2>
									<p><?php echo $single_engineer['slider_copy'] ?></p>
									<a href="<?php echo $single_engineer['slider_related_link_title'] ?>" class="big-link"><?php echo $single_engineer['slider_related_link_destination'] ?></a><br>
									<a href="<?php echo $single_engineer['slider_call_to_action_text'] ?>" class="button"><?php echo $single_engineer['slider_call_to_action_destination'] ?></a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<?php
											$attachment_id = $single_engineer['slider_profile_image'];
											$size = "slider_profile";
											$image = wp_get_attachment_image_src( $attachment_id, $size );
										?>
										<img src= "<?php echo $image[0]; ?>" alt="" class="responsive">
										
									</figure>
									<div class="content">
										<h4><?php echo $single_engineer['slider_profile_name'] ?></h4>
										<p><?php echo $single_engineer['slider_profile_description'] ?></p>
									</div>
								</article>
							</div>
						</article>
					</div>
					<?php } ?> 
				</div>
			</div>
		</section>
		<?php } ?>

		<!-- SEP -->

		<div class="cool-sep"></div>


		<section class="box-text-top align-center container-normal bkg-orbit-right">
			<div class="container">
				<h2>To be the best, we hire the best</h2>
				<p>Bacon ipsum dolor amet flank turkey sausage, brisket meatball beef ribs chicken. Cow meatloaf <br>short ribs, tail pork loin filet mignon leberkas chicken burgdoggen tenderloin brisket shankle. </p>
				<ul class="list-boxes-two">
					<li>
						<div class="box-icon-text">
							<i class="icon-apple"></i>
							<h4>Health & WEllness</h4>
							<p>Full health coverage for you and your family (Solvvy pays 100% of your premiums), and a $150 monthly fitness and wellness reimbursement.</p>
						</div>
					</li>
					<li>
						<div class="box-icon-text">
							<i class="icon-book"></i>
							<h4>Health & WEllness</h4>
							<p>Receive $500 annually (or equivalent) towards a personal development opportunity of your choice, and $2000 annually (or equivalent) for professional development.</p>
						</div>
					</li>
					<li>
						<div class="box-icon-text">
							<i class="icon-clock"></i>
							<h4>Health & WEllness</h4>
							<p>A lot of us have families, of all shapes and sizes and types, and we welcome each new addition with generous parental and new child bonding leave.</p>
						</div>
					</li>
					<li>
						<div class="box-icon-text">
							<i class="icon-smiley"></i>
							<h4>Health & WEllness</h4>
							<p>A meeting-light culture (or we try, at least), weekly massage therapy, guest speakers, and opportunities to get to know your team better through things like weekly catered lunch and breakfast, Thursday Socials, and game nights. But we don’t stay in the office 24/7.</p>
						</div>
					</li>
				</ul>
				<a href="" class="button-pink">View Open Roles</a>
			</div>
		</section>

		<!-- SEP -->

		<div class="cool-sep"></div>

		<!-- SPHERES -->

		<section class="box-text-top align-center container-normal bkg-none">
			<div class="container">
				<h2>By The Numbers</h2>
				<p>Bacon ipsum dolor amet flank turkey sausage, brisket meatball beef ribs chicken. Cow meatloaf <br> short ribs, tail pork loin filet mignon leberkas chicken burgdoggen tenderloin brisket shankle. </p>
				<div id="cy"></div>
			</div>
		</section>

		<!-- SEP -->
		
		<div class="cool-sep"></div>

		<!-- SLIDER -->
		
		<section class="slider-interior">
			<div class="container">
				<div class="owl-carousel owl-careers">		
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2>Our engineers are coding their way to the future.</h2>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone shankle corned beef sirloin picanha beef ribs jowl alcatra chicken. </p>
									<a href="" class="big-link">Ready to have your work change the landscape?</a><br>
									<a href="" class="button">Current Openings</a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<img src="<?php bloginfo('template_url'); ?>/images/the-man-2.jpg" alt="" class="responsive">
									</figure>
									<div class="content">
										<h4>Meet Bobby</h4>
										<p>Filet mignon kevin burgdoggen, alcatra shankle pancetta picanha pastrami cow tail drumstick beef ribs. Strip steak spare ribs shoulder tongue rump, frankfurter bresaola burgdoggen biltong hamburger corned beef tenderloin tail salami. Cow rump pork loin ham hock capicola frankfurter biltong brisket doner.</p>
									</div>
								</article>
							</div>
						</article>
					</div>
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2>Our engineers are coding their way to the future.</h2>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone shankle corned beef sirloin picanha beef ribs jowl alcatra chicken. </p>
									<a href="">Ready to have your work change the landscape?</a><br>
									<a href="" class="button">Current Openings</a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<img src="<?php bloginfo('template_url'); ?>/images/the-man-2.jpg" alt="" class="responsive">
									</figure>
									<div class="content">
										<h4>Meet Bobby</h4>
										<p>Filet mignon kevin burgdoggen, alcatra shankle pancetta picanha pastrami cow tail drumstick beef ribs. Strip steak spare ribs shoulder tongue rump, frankfurter bresaola burgdoggen biltong hamburger corned beef tenderloin tail salami. Cow rump pork loin ham hock capicola frankfurter biltong brisket doner.</p>
									</div>
								</article>
							</div>
						</article>
					</div>
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2>Our engineers are coding their way to the future.</h2>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone shankle corned beef sirloin picanha beef ribs jowl alcatra chicken. </p>
									<a href="">Ready to have your work change the landscape?</a><br>
									<a href="" class="button">Current Openings</a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<img src="<?php bloginfo('template_url'); ?>/images/the-man-2.jpg" alt="" class="responsive">
									</figure>
									<div class="content">
										<h4>Meet Bobby</h4>
										<p>Filet mignon kevin burgdoggen, alcatra shankle pancetta picanha pastrami cow tail drumstick beef ribs. Strip steak spare ribs shoulder tongue rump, frankfurter bresaola burgdoggen biltong hamburger corned beef tenderloin tail salami. Cow rump pork loin ham hock capicola frankfurter biltong brisket doner.</p>
									</div>
								</article>
							</div>
						</article>
					</div>
					<div class="item">
						<article class="slider-info">
							<div class="col-left">
								<div class="slider-info--box">
									<h2>Our engineers are coding their way to the future.</h2>
									<p>Bacon ipsum dolor amet sausage landjaeger strip steak, filet mignon spare ribs t-bone shankle corned beef sirloin picanha beef ribs jowl alcatra chicken. </p>
									<a href="">Ready to have your work change the landscape?</a> <br>
									<a href="" class="button">Current Openings</a>
								</div>
							</div>
							<div class="col-right">
								<article class="box box-case">
									<figure>
										<svg id="Layer_1" class="wave-study" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415.33 138.75"><title>wave-top</title><path d="M580.79,161.82V34.69C448.9,14.75,312.42,15.39,166,77.74l-.55,84.08Z" transform="translate(-165.46 -23.07)" style="fill:#3f2689"/></svg>

										<svg id="Layer_1" class="wave-study backend" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 456.91 238.96"><title>wave</title><path d="M1800,6.74c-137.86-19.91-297.31,20.47-456.91,52.37v181.3H1800Z" transform="translate(-1343.09 -1.45)" style="fill:#bdb2f2;opacity:0.3499999940395355;isolation:isolate"/></svg>
										<img src="<?php bloginfo('template_url'); ?>/images/the-man-2.jpg" alt="" class="responsive">
									</figure>
									<div class="content">
										<h4>Meet Bobby</h4>
										<p>Filet mignon kevin burgdoggen, alcatra shankle pancetta picanha pastrami cow tail drumstick beef ribs. Strip steak spare ribs shoulder tongue rump, frankfurter bresaola burgdoggen biltong hamburger corned beef tenderloin tail salami. Cow rump pork loin ham hock capicola frankfurter biltong brisket doner.</p>
									</div>
								</article>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>

		<!-- BOX GRAY -->

		<section class="box-gray box-testimonial">
			<div class="container">
				<ul class="formated-list">
					<li><img src="<?php bloginfo('template_url'); ?>/images/glassdor.png" class="responsive" alt=""></li>
					<li><p>“Ham hock capicola turkey pastrami brisket, meatloaf t-bone pork belly pancetta. Pig short loin shoulder salami. Kevin flank beef turkey shank boudin. Pork loin cow pancetta short loin andouille tail, brisket picanha chuck filet mignon.”</p></li>
					<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
				</ul>
			</div>
		</section>

		<!-- SLIDER BOTTOM TEAM -->
	
		<section class="box-text-top container-normal align-center bkg-none">
			<div class="container">
				<h2>Hear From the Team</h2>
				<p>Get insights from team members about work at Solvvy or meet the core team.</p>

				<div class="owl-carousel owl-careers">		
					<div class="item">
						<div class="padding">
							<article class="box-slider-bottom">
								<svg class="waves-bottom2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1657 134.52"><title>wave-top</title><path d="M1657,173V92c-222.29,15.82-453.31,37.81-652.11,5.85C275.33-19.45,191.35,69.61,0,90.44v79.3L121.44,173Z" transform="translate(0 -38.45)" style="fill:#9155aa;opacity:0.3499999940395355;isolation:isolate"/><path d="M1657,173V44.1c-183.6,31.36-380.1,76.73-532.61,88.19C752,160.27,403.57,4.84,0,64.52V173Z" transform="translate(0 -38.45)" style="fill:#5d0e8b"/></svg>
								<div class="content">
									<h4>They gave me a subscription to the Dollar Shave Club, but I grow a beard by the end of the day, so I opted for free snacks and goodies from the corner market and grocer. This place is so awesome!</h4>
								</div>
								<div class="content-image">
									<img src="<?php bloginfo('template_url'); ?>/images/the-man-3.jpg" class="responsive" alt="">
								</div>
							</article>
						</div>
					</div>
					<div class="item">
						<div class="padding">
							<article class="box-slider-bottom">
								<svg class="waves-bottom2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1657 134.52"><path d="M1657,173V92c-222.29,15.82-453.31,37.81-652.11,5.85C275.33-19.45,191.35,69.61,0,90.44v79.3L121.44,173Z" transform="translate(0 -38.45)" style="fill:#9155aa;opacity:0.3499999940395355;isolation:isolate"/><path d="M1657,173V44.1c-183.6,31.36-380.1,76.73-532.61,88.19C752,160.27,403.57,4.84,0,64.52V173Z" transform="translate(0 -38.45)" style="fill:#5d0e8b"/></svg>
								<div class="content">
									<h4>They gave me a subscription to the Dollar Shave Club, but I grow a beard by the end of the day, so I opted for free snacks and goodies from the corner market and grocer. This place is so awesome!</h4>
								</div>
								<div class="content-image">
									<img src="<?php bloginfo('template_url'); ?>/images/the-man-3.jpg" class="responsive" alt="">
								</div>
							</article>
						</div>
					</div>
					<div class="item">
						<div class="padding">
							<article class="box-slider-bottom">
								<svg class="waves-bottom2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1657 134.52"><title>wave-top</title><path d="M1657,173V92c-222.29,15.82-453.31,37.81-652.11,5.85C275.33-19.45,191.35,69.61,0,90.44v79.3L121.44,173Z" transform="translate(0 -38.45)" style="fill:#9155aa;opacity:0.3499999940395355;isolation:isolate"/><path d="M1657,173V44.1c-183.6,31.36-380.1,76.73-532.61,88.19C752,160.27,403.57,4.84,0,64.52V173Z" transform="translate(0 -38.45)" style="fill:#5d0e8b"/></svg>
								<div class="content">
									<h4>They gave me a subscription to the Dollar Shave Club, but I grow a beard by the end of the day, so I opted for free snacks and goodies from the corner market and grocer. This place is so awesome!</h4>
								</div>
								<div class="content-image">
									<img src="<?php bloginfo('template_url'); ?>/images/the-man-3.jpg" class="responsive" alt="">
								</div>
							</article>
						</div>
					</div>
				</div>

			</div>
		</section>
		
		<!-- BOX BLUE FPO -->
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-top.png" alt="" class="responsive block">
		<div class="blue-box-waves in-careers">
			<div class="container">
				<div class="image">
					<div class="images">
						<img src="<?php bloginfo('template_url'); ?>/images/the-man-5.jpg" class="image-front" alt="">
						<img src="<?php bloginfo('template_url'); ?>/images/the-man-4.jpg" class="image-back" alt="">
					</div>
				</div>
				<div class="info">
					<h2>Ready to Join Us?</h2>
					<p>Strip steak doner bacon capicola. Ribeye swine sirloin, kielbasa shankle tail pork chop t-bone short ribs jerky. Kevin brisket hamburger.</p>
					<a href="" class="button-tn">APPLY NOW</a>
				</div>
			</div>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-box-bottom.png" alt="" class="responsive">

<?php get_footer(); ?>