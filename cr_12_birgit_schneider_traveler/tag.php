<?php get_header(); ?>
    
<main class = "site-main">
    
    <div class ="text-center p-1 mb-4 bg-light text-dark">
    <h1 ><?php single_tag_title();?></h1>
    <div class ="text-center"><?php echo tag_description();?></div>
    </div>

    <div class = "row">
        
    <!--    <article class = "site-content"> -->

            <div class ="col-9">


                 <div class = "loop">

                   <!-- Start Loop --> 

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template_parts/content'); ?>

                        <?php endwhile; else : ?>

                           <?php get_template_part('template_parts/content','error'); ?>

                        <!-- End Loop -->
                        <?php endif; ?>
                     
                        <?php previous_posts_link();?>
                        <?php next_posts_link();?>

                  </div>

            </div>
        
            
            
 
    <!--     </article> -->

            <div class ="col-3">

                <?php get_sidebar(); ?>  

            </div>

        </div>
    
</main> 

<?php get_footer(); ?>

