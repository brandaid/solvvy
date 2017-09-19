<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Resources

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>


		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		
<?php 

$args = array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'resources_cards',
	'meta_key'		=> 'featured_resource',
	'meta_value'	=> '1'
);

$the_query = new WP_Query( $args ); ?>
<?php if( $the_query->have_posts() ): ?>	

		<section class="box-text-top container-normal pink-ball">
			<div class="container">
				<h2>Featured Resources</h2>
				<ul class="list-boxes-three three-ipad assets-featured">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php $terms = get_the_terms( $post->ID, 'resource-types' ); ?>
					<li>
						<div class="fpo-resources">
							<img src="<?php if( get_field('featured_resource_image') ): ?><?php the_field('featured_resource_image') ?><?php else: ?><?php bloginfo('template_url'); ?>/images/fpo-cover.png <?php endif; ?>" alt="" class="responsive">
							<h3><?php foreach( $terms as $term ) echo ' ' . $term->name . ': '; ?> <?php the_title();?></h3>
							<p> <?php if( get_field('featured_resource_text') ): ?><?php the_field('featured_resource_text') ?><?php else: ?><?php the_content(); ?><?php endif; ?> </p>
							<a href=" <?php if( get_field('button_link_type') == 'url' ):?><?php the_field('button_link_destination') ?><?php elseif( get_field('button_link_type') == 'pdf' ): ?><?php the_field('button_link_pdf') ?><?php endif; ?>" class="button" target="_blank"><?php the_field('button_text') ?></a>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>

			</div>
		</section>

		<div class="cool-sep"></div>
		<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
		
		<div class="content-button">
			<a href="javascript:void(0);" class="open-div">Filter Resources</a>
		</div>
		<div id="show-all-none">
			<section class="box-filters" id="filters">
				<div class="container">
					<ul class="formated-list">
					<li>
						<input class="styled-checkbox" id="all" type="checkbox" value="all">
						<label for="all">All</label>
					</li>
					<?php
					$_terms = get_terms( array('resource-types') );

					foreach ($_terms as $term) :

					    $term_slug = $term->slug;
						$term_name = $term->name;
					?>
					<li>
						<input class="styled-checkbox" id="<?php echo $term_slug ?>" type="checkbox" value="<?php echo $term_slug ?>">
						<label for="<?php echo $term_slug ?>"><?php echo $term_name ?></label>
					</li>
					<?php
					endforeach;
					?>
					</ul>
				</div>
			</section>

			<section class="section-assets-cards">
				<div class="container">
					<ul class="list-boxes-three">

				<?php
				$args = array( 'post_type' => 'resources_cards','posts_per_page' => -1);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<?php $terms = get_the_terms( $post->ID, 'resource-types' ); ?>
				<li class="<?php if ( has_term('', 'resource-types') ) { foreach( $terms as $term ) echo $term->slug . ' '; }?>">
					<div class="asset-cards">
						<img src="<?php if( has_post_thumbnail() ): ?><?php the_post_thumbnail_url(); ?><?php else: ?><?php bloginfo('template_url'); ?>/images/asset-cards.jpg <?php endif; ?>" alt="" class="responsive">
						<div class="content">
							<small><?php foreach( $terms as $term ) echo ' ' . $term->name; ?></small>
							<h3><a href=" <?php if( get_field('button_link_type') == 'url' ):?><?php the_field('button_link_destination') ?><?php elseif( get_field('button_link_type') == 'pdf' ): ?><?php the_field('button_link_pdf') ?><?php endif; ?>" target="_blank"><?php the_title();?></a></h3>
							<p><?php the_content(); ?> </p>
							<a href=" <?php if( get_field('button_link_type') == 'url' ):?><?php the_field('button_link_destination') ?><?php elseif( get_field('button_link_type') == 'pdf' ): ?><?php the_field('button_link_pdf') ?><?php endif; ?>" class="button-tn" target="_blank"><?php the_field('button_text') ?></a>
						</div>
					</div>
				</li>
				<? endwhile; ?>
				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
					</ul>
				</div>
			</section>

		</div>

		<section class="box-gray marketo-newsletter">
			<div class="container">
				<ul>
					<li><p>Get <b>FREE</b> tools and best practices from Solvvy</p></li>
					<li>
						<script src="//app-ab24.marketo.com/js/forms2/js/forms2.min.js"></script>
						<form id="mktoForm_1211" class="marketo-updates"></form>
						<script>MktoForms2.loadForm("//app-ab24.marketo.com", "733-WJM-922", 1211);</script>
					</li>
					
					<li><p>We respect your privacy.</p></li>
				</ul>
			</div>
		</section>


		
<?php get_footer(); ?>