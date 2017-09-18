<?php //get_header(); ?>


<?php
<ul>
    <h3><b>Results for:</b> <?php echo get_search_query(); ?></h3>

    <?php if ( have_posts() ) : ?>       
        <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <div><a href="<?php the_permalink(); ?>">Read More</a></div>
            </li>
        <?php endwhile; ?>
    <?php else : ?>
            <div>
                No results found...
            </div>  
    <?php endif; ?>
</ul>
?>


<?php //get_footer(); ?>