<div class = "latest-posts">
    
   <!-- Start WP_Query Loop --> 
    
    <?php 
    $args = array(
        'post_type'  => 'post',
        'posts_per_page' => 3
    );
    
    $mein_loop = new WP_Query($args);?>
    
        <?php if ( $mein_loop->have_posts() ) : while ( $mein_loop->have_posts() ) : $mein_loop->the_post(); ?>

            <?php get_template_part('template_parts/content'); ?>

        <?php endwhile; else : ?>

           <?php get_template_part('template_parts/content','error'); ?>

        <!-- End Loop -->
        <?php endif; wp_reset_postdata();?>

</div>
       