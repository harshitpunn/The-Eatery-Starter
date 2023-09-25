<?php 

get_header(); 

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

<?php if(is_single()):
  the_post_navigation();
  
get_footer();