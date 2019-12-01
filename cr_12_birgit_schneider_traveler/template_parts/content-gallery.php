
<section <?php post_class();?>>

 
 <div class = "col-md-6">    
  <div class='card h-100 article'>
      <img src="<?php echo the_post_thumbnail_url($post_id, 'thumbnail')?>" class="card-img-top" alt="thumbnail">
      <div class='card-body'>
        <div class="card-title">Bildergallery:<a href="<?php the_permalink();?>"><?php the_title()?></a></div>
        <p class="card-text"><?php the_content("Read more ...") ?></p>
          
        
          
        <p class="card-text text-center"><small class="text-muted">
            
            <?php if (has_post_format ('video')) {
            echo '<strong>Video:</strong>';
            } elseif (has_post_format ('gallery')) {
            echo '<strong>Gallery:</strong>';
            }
            ?>
            
            
            Created: <?php the_time('d.m.Y');?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>, Categorys: <?php the_category(', ');?>, <?php the_tags();?></small></p>
          
     </div>
  </div>
</div>

</section>

    
    
  