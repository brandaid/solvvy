<?php
/**
 * @package WordPress
 * @subpackage Solvvy

 Template Name: Template Our Events

*/
?>
<?php get_header(); ?>
<?php the_post(); ?>

		
		<!-- SECTION HERO BANNER -->

		<?php get_template_part( 'template-parts/herobanner' ); ?>


		<!-- BOX TEXT -->
		

		<section class="box-text-top container-normal pink-ball title-to-left">
			<div class="container align-left">
				<h2>Upcoming Events</h2>

				<ul class="list-boxes-three three-ipad">
					<li>
						<div class="box-events waves-bottom">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-events waves-bottom">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
				</ul>


				<ul class="event_list_view">    

<?php // Let's get the data we need to loop through below
//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$d = date("m-d-Y");
$today = date('Y-m-d', strtotime('-6 hours')); //define "today" format; note timezone offset of -6 hours
$args = array(
    'post_type' => 'event',
    'posts_per_page' => '3',
    'post_status'  =>  'publish',
    'meta_key' => 'event-start-date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
    'meta_query' => array(
    'relation'  =>   'AND',
    array(
            'key' => 'event-end-date',
         'meta-value' => date('Y-m-d', strtotime('-6 hours')), //value of "order-date" custom field
         'compare' => '>=', //show events greater than or equal to today
         'type' => 'CHAR'
        )
    )
);
$the_query = new WP_Query( $args ); ?>


<?php if ( $the_query->have_posts() ) : ?>

    <!-- pagination here -->

    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>





<li class="clearfix">
<div class="featured_tag"></div>


<?php if ( '' != get_the_post_thumbnail() ) { ?>
<a class="post_img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php the_post_thumbnail('event-thumbnail'); ?>
</a>
<?php } else { ?>
<a class="post_img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<img src="http://aishaarab.com/wp-content/uploads/2014/08/DefaultEvent-125x75.png" alt="" />
</a>
<?php } ?>

<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

<p class="timing"> 
<span>Start Date: </span><?php meta('event-start-date'); ?><br>
<span>End Date: </span><?php meta('event-end-date'); ?><br>
<span>Time: </span><?php meta('event_time'); ?><br>
</p>

<p class="address"><span>Location :</span> <br><?php meta('event_address'); ?>, <?php meta('event_city'); ?>, <?php meta('event_state'); ?>, <?php meta('event_country'); ?></p>
<div class="clear"></div>
<p class="bottom">
<a class="read_more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
</p>

</li>


    <!-- #post-<?php the_ID(); ?> -->

     <?php endwhile; else: ?>  
      <p> 
        <?php _e('Sorry, no events matched your criteria.'); ?>  
      </p>  
      <?php endif; ?> <?php //wp_reset_query(); ?>


</ul>


			</div>
		</section>

		<div class="cool-sep"></div>

		<section class="box-text-top container-normal title-to-left">
			<div class="container  align-left">
				<h2>Past Events</h2>

				<ul class="list-boxes-three three-ipad">
					<li>
						<div class="box-events">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-events">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-events">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-events">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-events">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
					<li>
						<div class="box-events">
							<img src="<?php bloginfo('template_url'); ?>/images/events.jpg" alt="" class="responsive">
							<div class="content align-left">
								<h3><a href="">10 Ways Origami Reduced Stress for Solvvy</a></h3>
								<p class="data-article">San Francisco, CA <span>October 15, 2017</span></p>
								<a href="" class="button-tn">Register Now</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		
		<div class="cool-sep"></div>

		
<?php get_footer(); ?>