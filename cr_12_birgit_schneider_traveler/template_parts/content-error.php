<?php if(is_search()) { ?>

    <section <?php post_class();?>>         
        <p>Sorry, no posts match your criteria.</p>   
    </section>

<?php } else { ?>

    <section <?php post_class();?>> 
        <h1>Fehler 404</h1>
        <p>This page does not exist</p>   
    </section>

<?php } ?>

