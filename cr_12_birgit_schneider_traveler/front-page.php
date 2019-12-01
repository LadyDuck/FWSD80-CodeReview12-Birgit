<?php get_header(); ?>
    
<main class = "site-main">
    <div class = "container-fluid">
           
        <h1><div class="p-3 mb-2 bg-light text-dark text-center"><?php the_title()?></div></h1>
                 
    <!-- Start Loop --> 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>           
                             
              <p class="card-text text-center"><small class="text-muted">
              Created: <?php the_time('d.m.Y');?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> </small></p>
              <div class="card-text text-center"><?php the_content() ?></div>
                                  
        <?php endwhile; else : ?>

           <?php get_template_part('Leider nichts gefunden'); ?>

        <!-- End Loop -->
        <?php endif; ?>

        
        <!-- Start WP Query -->
        <?php
        
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
        ); ?>
        
        <div class = "row mb-4">
            
        <?php
        
        $loop2 = new WP_Query($args);
        
        if ($loop2->have_posts()) : while ($loop2->have_posts() ) : $loop2->the_post(); ?>
            <?php get_template_part('template_parts/content'); ?>
        <?php endwhile; else : ?>
            <?php get_template_part('template_parts/content','error'); ?>

        <!-- End Loop -->
        <?php endif; wp_reset_postdata()?>
        
    </div>
                        
    </div>                                                                  
</main> 

<?php get_footer(); ?>

