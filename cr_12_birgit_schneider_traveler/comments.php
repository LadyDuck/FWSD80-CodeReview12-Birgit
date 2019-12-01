<div class="comment-form">
 <?php $fields = array(
 'author' => '<p><label for="author">' . __( 'Your name <em>(required)</em>' ) . '</label><br /><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
 'email' => '<p><label for="email">' . __( 'Your e-mail adress <em>(required, we will never share your email with anyone else)</em>' ) . '</label><br /><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
 'url' => '<p><label for="url">' . __( 'Your website' ) . '</label><br /><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
 );
 
 comment_form( array (
 'fields' => apply_filters( 'comment_form_default_fields', $fields ), 
 'comment_notes_before' => '<p>Please write your comment:</p>', 
 'comment_notes_after' => '<div class="text-danger"><p>Your comment will be visible after approval </p></div>', 
 'title_reply' => __( '<h3>Write a comment</h3>' )
 ));
 ?>
</div>




<div class="comment-list">
 <?php if ( have_comments() ) : ?>
 
 <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
 <div class="navigation">
 <div class="nav-previous"> <?php previous_comments_link( 'Older comments' ); ?> </div>
 <div class="nav-next"> <?php next_comments_link( 'Recent comments' ); ?> </div>
 </div>
 <?php endif; ?>
 
    <!--Bestimmen wie ein einzelner Kommentar aussieht-->
 <ul>
 <?php wp_list_comments('type=all&callback=wpv_comments'); ?>
 </ul>
 
 <?php if ( ! comments_open() ) : ?>
 <p>Comments for this posting disabled</p>
 <?php endif; ?>
 
 <?php endif; ?>
</div>