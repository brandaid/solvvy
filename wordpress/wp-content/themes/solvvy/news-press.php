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
						$link = get_field('featured_story_button');
				?>
					<li>
						<div class="box-stories">
							<div class="content-brand">
								<div class="content-img">
								<?php if ( has_post_thumbnail() ) { ?><img src="<?php the_post_thumbnail_url() ?>" class="responsive" alt=""><?php }  ?>
								</div>
							</div>
							<div class="content">
								<h3><a <?php if( $link ): ?> href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>"<?php else: ?>href="<?php the_permalink() ?>"<?php endif; ?>><?php the_title(); ?></a></h3>
								<p class="data-article"><?php if(get_field('source_name')): ?><?php the_field('source_name') ?> - <?php endif ?><span><?php echo get_the_date(); ?></span></p>
								<?php if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button"><?php echo $link['title']; ?></a>
								<?php else: ?>
									<a href="<?php the_permalink() ?>" class="button">Read More</a>
								<?php endif; ?>
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
					<?php
					$args = array(
								'posts_per_page'	=> 8,
								'post_type'			=> 'news',
					);
				    $loop = new WP_Query( $args );
				    $count = $loop->found_posts;
				    if ( $loop->have_posts() ) :?>
				       
					<div class="left-col">
						<h2>News</h2>
						<ul class="list-boxes-two">
							<?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li>
								<article>
									<h3 class="titles-news"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<p class="data-article"><?php if(get_field('source_name')): ?><?php the_field('source_name') ?> - <?php endif ?><span><?php echo get_the_date(); ?></span></p>
								</article>
							</li>
							<?php endwhile;?>
						</ul>
						<?php if($loop->max_num_pages > 1){ ?><a href="<?php echo get_post_type_archive_link( 'news'); ?>" class="button-pink">Read More</a><?php } ?>
					</div>
				<?php  endif;
		   		 wp_reset_postdata();
				?>	
				<?php
					$args = array(
								'posts_per_page'	=> 4,
								'post_type'			=> 'press',
					);
				    $loop = new WP_Query( $args );
				    $count = $loop->found_posts;
				    if ( $loop->have_posts() ) :?>
					<div class="right-col">
						<h2>Press</h2>
						<ul class="formated-list">
						<?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<li>
								<article>
									<h3 class="titles-news"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<p class="data-article"><?php if(get_field('source_name')): ?><?php the_field('source_name') ?> <span>-</span> <?php endif ?><span><?php echo get_the_date(); ?></span></p>
								</article>
							</li>
						<?php endwhile;?>
						</ul>
						<?php if($loop->max_num_pages > 1){ ?><a href="<?php echo get_post_type_archive_link( 'press'); ?>" class="button-pink">View More</a><?php } ?>
					</div>
					<?php  endif;
			   		 wp_reset_postdata();
					?>	
				</div>
			</div>
		</section>
		<img src="<?php bloginfo('template_url'); ?>/images/waves-gray-bottom.png" class="responsive" alt="">

		
<?php get_footer(); ?>