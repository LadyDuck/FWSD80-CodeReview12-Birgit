<?php get_header(); ?>
    
<main class = "site-main">
    
    <div class = "container-fluid">
        <div class = "row">
            
            <div class = "col-lg-9 col-md-9 col-sm-12">
        
                <article class = "site-content">
                    
                    <h1><div class="p-3 mb-2 bg-light text-dark text-center recent"><?php the_title()?></div></h1>
                    
                    <!-- Start Loop --> 
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                    <?php get_template_part('template_parts/content','single');?>
                    
                    <div class="prev">

                <h5><?php previous_post_link();?></h5>
                <h5><?php next_post_link();?></h5>

                    </div>
                    
                    <?php comments_template();?>
                    <?php endwhile; else : ?>
                       <?php get_template_part('template_parts/content','error'); ?>
                <!-- End Loop -->
                    <?php endif; ?>
                    
                            
                </article>
                
            </div>

            
            <div class = "col-lg-3 col-md-3 col-sm-12">

                <?php get_sidebar(); ?>  

            </div>
        
            
            
        </div>
    </div> 
</main>

<?php get_footer(); ?>
    
   