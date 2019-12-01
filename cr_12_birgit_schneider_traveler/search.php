<?php get_header(); ?>
    
<main class = "site-main">
    <div class = "container-fluid">
    
    <h1><div class="p-3 mb-2 bg-light text-dark text-center recent">Results for your search for "<i><?php echo $s ;?>"</i>:</div></h1>

        <div class = "row">
        

                   <!-- Start Loop --> 

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template_parts/content'); ?>

                        <?php endwhile; else : ?>

                           <?php get_template_part('template_parts/content','error'); ?>

                        <!-- End Loop -->
                        <?php endif; ?>
                     
                  </div>
        
                    <div class="prev text-center">
            
                        <h5><?php previous_posts_link();?></h5>
                        <h5><?php next_posts_link();?></h5>
            
                    </div>
        
            </div>
        </main> 

<?php get_footer(); ?>

