    <section <?php post_class();?>>
        
        <div class = "container-fluid">
            
            <div class = "row">
        
            <div class = "col-lg-9 col-md-9 col-sm-12">
                
                <h1><div class="p-3 mb-2 bg-light text-dark text-center recent"><?php the_title()?></div></h1>
                
                <p><?php the_content() ?></p>
                                                
            </div>
        
            <div class = "col-lg-3 col-md-3 col-sm-12">

                <?php get_sidebar(); ?>  

            </div>

            
        </div>
        
        
        
        </div>
        
   </section>