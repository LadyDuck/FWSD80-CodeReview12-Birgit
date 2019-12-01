<?php get_header(); ?>
    
    <main class = "site-main">
         
        <!-- Start Loop --> 
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('template_parts/content','page'); ?>

            <?php endwhile; else : ?>

               <?php get_template_part('template_parts/content','error'); ?>

            <!-- End Loop -->
            <?php endif; ?>
        
       
     <?php get_sidebar(); ?> 
        
    </main>

<?php get_footer(); ?>
    
   