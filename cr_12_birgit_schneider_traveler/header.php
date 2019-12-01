<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?> <?php bloginfo( 'name' ); ?></title>
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="">
    
    <?php wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>
    
<body <?php body_class();?>>
    
    <div class = "container-fluid">
        
        <?php get_template_part('template_parts/navi'); ?>
        
               
                <header class = "site-header">
                    
                    <div class="jumbotron">
                      <h1 class="display-4 text-center"><a href = "<?php echo home_url('/') ?>"><?php bloginfo( 'name' ); ?></a></h1>
                      <p class="lead text-center"><?php bloginfo( 'description' ); ?></p>
                      <hr class="my-4">
                      <p></p>
                    </div>
                    
        <!--         <h1><a href = "<?php echo home_url('/') ?>"><?php bloginfo( 'name' ); ?></a></h1> 

                    <h4><?php bloginfo( 'description' ); ?></h4>-->
                    
                </header>
                
            
            
    </div> 