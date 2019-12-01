<?php get_header(); ?>
    
<main class = "site-main">
    <div class = "container-fluid">
        <div class = "row">
            
            
            <div class = "col-lg-9 col-md-9 col-sm-12">
    
                <h1><div class="p-3 mb-2 bg-light text-dark text-center recent"><?php single_cat_title();?></div></h1>
                <div class ="text-center"><?php echo category_description();?></div>
        
    
   
 <div class = "row mb-4">

                   <!-- Start Loop --> 

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template_parts/content'); ?>

                        <?php endwhile; else : ?>

                           <?php get_template_part('template_parts/content','error'); ?>

                        <!-- End Loop -->
                        <?php endif; ?>
                        
                        
                    </div> <!-- End: <div class = "row mt-4 mb-4">  -->
                                  
            </div>
        
       

            <div class = "col-lg-3 col-md-3 col-sm-12">

                <?php get_sidebar(); ?>  

            </div>

            
        </div>
        
        <div class="prev text-center">
            
        <h5><?php previous_posts_link();?></h5>
        <h5><?php next_posts_link();?></h5>
            
        </div>
      
        
    </div>
</main> 

<?php get_footer(); ?>


