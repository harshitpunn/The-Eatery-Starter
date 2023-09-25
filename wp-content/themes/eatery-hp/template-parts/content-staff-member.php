<?php ?>
<article <?php post_class(); ?>>
  <h3 class="employee-name"><?php the_title(); ?></h3>
  <div class="employee-thumbnail"><?php the_post_thumbnail(); ?></div>
  <div class="employee-position"><?php the_field('staff_member_position'); ?></div>
  <div class="employee-descriptioon"><?php the_field('staff_member_description'); ?></div>
</article>