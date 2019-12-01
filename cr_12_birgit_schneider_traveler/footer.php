<footer class ="site-footer">
    
   <div class = "container-fluid">
      
   
       
     <nav class = "navbar navbar-light bg-light site-footer ">
         
         <span class = "nav-secondary">
              
          <?php      
            wp_nav_menu( array(
            'theme_location' => 'social',
            'depth' => 1,
            'container' => ''
            ) );
            ?>
              
        </span>
    
        <span class = "nav-social">
        
            <?php      
            wp_nav_menu( array(
            'theme_location' => 'secondary',
            'depth' => 1,
            'container' => ''
            ) );
            ?>
          
        </span>
         
    </nav>
        
 
    
   </div>  
</footer>
    


<?php wp_footer();?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

</body>
</html>


