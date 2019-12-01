<?php get_header(); ?>
    
<main class = "site-main">
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-lg-9 col-md-9 col-sm-12">
           
        <h1><div class="p-3 mb-2 bg-light text-dark text-center recent"><?php the_title()?></div></h1>
                 
    <!-- Start Loop --> 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>           
                             
              <p class="card-text text-center"><small class="text-muted">
              Created: <?php the_time('d.m.Y');?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> </small></p>
              <div class="card-text text-center"><?php the_content() ?></div>
                                  
        <?php endwhile; else : ?>

           <?php get_template_part('template_parts/content','error'); ?>

        <!-- End Loop -->
        <?php endif; ?>
                
                     
            <div class = "row">
             
             <?php 
             
                $number_of_posts = get_option('post_per_page', 5);
                $paged = ( get_query_var('paged')) ? get_query_var('paged') : 1;
                $offset = ($paged-1) * $number_of_posts;
                
                $args = array(
                        'post_type' =>'post',
                        'posts_per_page' => 6,
                        'offset' => $offset,
                        'paged' => $paged
                );
                
                $loop2 = new WP_Query($args);
                    
                if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
                    <?php get_template_part('template_parts/content');?>
                <?php endwhile; else : ?>
                    <?php get_template_part('template_parts','error');?>
                <?php endif;?>
                
                </div> <!-- End: <div class = "row mt-4 mb-4">  -->
                
                <div>
                <h5 class="text-center"><?php previous_posts_link('<< Previous Posts', $loop2->max_num_pages);?></h5>
                <h5 class="text-center"><?php next_posts_link('Next Posts >>', $loop2->max_num_pages);?></h5>
                </div>
                
                <?php wp_reset_postdata()?>
                
               
                
               
             
                </div>
            
                 <div class = "col-lg-3 col-md-3 col-sm-12">

                <?php get_sidebar(); ?>  

                </div>
            
           
            
         
                
            </div>
        </div>
    </main>

<?php get_footer(); ?>
    
   