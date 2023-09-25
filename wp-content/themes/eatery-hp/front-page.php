<?php 

get_header(); 


?>
<section class="meal-menus">
  <h2 class="section-title screen-reader-text">Dishes</h2>
</section>


<?php

$args = array(
  'post_type' => 'meal_menu',
  'post_per_page' => '3',
  'orderby' => 'ASC',
);

$meals = new WP_Query($args);

if ( $meals->have_posts() ) :
  while ( $meals->have_posts() ) :
    $meals->the_post();
    get_template_part('template-parts/content-meal-menu');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>

</section>

<?php


// Employee loop
?>
<section class="staff-members">
  <h2 class="section-title">Staff Members</h2>
</section>


<?php

$args = array(
  'post_type' => 'staff_member',
  'post_per_page' => '4',
  'orderby' => 'rand',
);

$staff = new WP_Query($args);

if ( $staff->have_posts() ) :
  while ( $staff->have_posts() ) :
    $staff->the_post();
    get_template_part('template-parts/content-staff-member');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>

</section>

<section class="reservations">
  <h2 class="section-title">Reservations</h2>
  <?php

    $args = array(
      'pagename' => 'reservations',

    );

    $reservations = new WP_Query($args);

    if ( $reservations->have_posts() ) :
      while ( $reservations->have_posts() ) :
        $reservations->the_post();
        get_template_part('template-parts/content-reservations');
      endwhile;
      else :
        get_template_part('template-parts/content-none.php');
    endif;  
  ?>
</section>

<?php

//end staff members

get_footer();