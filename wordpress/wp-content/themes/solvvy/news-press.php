<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template News and Press

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<?php get_template_part( 'template-parts/herobanner' ); ?>


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
								<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
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
								<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
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
								<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								<a href="" class="button">Read More</a>
							</div>
						</div>
					</li>
				</ul>

			</div>
		</section>
		
		<img src="<?php bloginfo('template_url'); ?>/images/waves-gray-top.png" class="responsive block" alt="">
		<section class="box-gray-waves">
			<div class="container">
				<?php $mediaContact = get_field('media_contact'); ?>
				<?php if($mediaContact){ ?>
				<h4 class="media-contact">Media Contact: <span><?php echo $mediaContact['name'] ?> <?php if($mediaContact['position']){ ?>- <?php echo $mediaContact['position'] ?> <?php } ?>-  </span> <a href="mailto:<?php echo $mediaContact['contact_email'] ?>"><?php echo $mediaContact['contact_email'] ?></a></h4><?php } ?>
				<div class="box-two-columns">
					<div class="left-col">
						<h2>News</h2>
						<ul class="list-boxes-two">
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin shank doner amet strip</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin shank doner amet strip</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin shank doner amet strip</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin shank doner amet strip</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
						</ul>
						<a href="" class="button-pink">Read More</a>
					</div>
					<div class="right-col">
						<h2>Press</h2>
						<ul class="formated-list">
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin shank doner amet strip</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
							<li>
								<article>
									<h3 class="titles-news"><a href="">Bacon ipsum dolor amet strip steak ham hock rump cow kevin shank doner amet strip</a></h3>
									<p class="data-article">News Source Name <span>Month 15, 2017</span></p>
								</article>
							</li>
						</ul>
						<a href="" class="button-pink">View More</a>
					</div>
				</div>
			</div>
		</section>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-gray-bottom.png" class="responsive" alt="">

		
<?php get_footer(); ?>