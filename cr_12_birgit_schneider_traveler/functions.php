<?php
// Register Nav Walker class_alias
require_once('class-wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup(){
        //Nav Menus
        register_nav_menus(array(
                'primary' => __('Primary Menu'),
                'secondary' => __('Secondary Menu'),
                'social' => __('Social Menu')
                ));
}
add_action('after_setup_theme','wpb_theme_setup');



// Support for the featured image
add_theme_support('post-thumbnails');




//Widget - sidebar
function wpb_init_widgets(){
   register_sidebar(array(
       'name' => 'Sidebar',
       'id' => 'sidebar',
       'description' => 'Sidebar - right from content',
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h5 class = "widgettitle">',
       'after_title' => '</h5>'
        ));
}
add_action('widgets_init', 'wpb_init_widgets');


// Beitragsformate

add_theme_support ('post-formats', array('aside', 'video','gallery'));


 // Kommentare

    function wpv_comments( $comment, $args, $depth ) { $GLOBALS['comment'] = $comment; ?>

    <li class="single-comment">
     <?php echo get_avatar( $comment, $size='64' ); ?>
     <p><?php echo get_comment_author_link(); ?></p>
     <p><?php echo get_comment_date("d.m.Y"); ?>, <?php echo get_comment_time(); ?> </p>
     <?php comment_text(); ?>
        
        <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
         </div>
       
    <?php }







