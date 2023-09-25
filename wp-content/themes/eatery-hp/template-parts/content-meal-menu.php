<?php ?>
<article <?php post_class(); ?> id="<?php the_title_attribute(); ?>" style="
background-image: url(<?php the_field('background_image');?>);
background-size: cover;
background-repeat: no-repeat;
">
  <div class="meal-menu-content">
  <div class="meal-menu-title-times">
    <h3 class="meal-menu-title"><?php the_title(); ?></h3>
    <div class="meal-menu-time">
      <?php the_field('menu_start_time'); ?>
      to
      <?php the_field('menu_end_time'); ?>
    </div>
  </div>
    <?php the_content(); ?>
  </div>
</article>