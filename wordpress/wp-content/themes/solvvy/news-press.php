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
	<?php
	$args = array(
				'posts_per_page'	=> -1,
				'post_type'			=> array('news', 'press'),
				'meta_key'		=> 'featured_story',
				'meta_value'	=> '1'
	);
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) :?>
       

  

		<section class="box-text-top container-normal pink-ball title-to-left">
			<div class="container">
				<h2>Featured Stories</h2>

				<ul class="list-boxes-three three-ipad">
				<?php  while ( $loop->have_posts() ) : $loop->the_post(); 
					   $featuredStory = get_field('featured_story_card');
				?>

					<li>
						<div class="box-stories">
							<div class="content-brand">
								<div class="content-img">
									<img src="<?php bloginfo('template_url'); ?>/images/brand-wsj.png" alt="" class="responsive">
								</div>
							</div>
							<div class="content">
								<h3><a href="<?php echo $featuredStory['featured_story_button']['url'] ?>"><?php the_title(); ?></a></h3>
								<p class="data-article"><?php if(get_field('source_name')): ?><?php the_field('source_name') ?> - <?php endif ?><span><?php the_date(); ?></span></p>
								<?php if($featuredStory['featured_story_button']['title']): ?><a href="<?php echo $featuredStory['featured_story_button']['url'] ?>" target="<?php echo $featuredStory['featured_story_button']['target'] ?>" class="button"><?php echo $featuredStory['featured_story_button']['title'] ?></a><?php endif ?>
							</div>
						</div>
					</li>
					<?php endwhile;?>
				</ul>

			</div>
		</section>
	     <?php  endif;
		    wp_reset_postdata();
		?>	
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