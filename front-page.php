<?php 

get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        get_template_part( 'content-templates/content', 'teste' );
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_sidebar();

get_footer();