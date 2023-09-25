<?php ?>
<article <?php post_class(); ?>>
  <h3><?php the_title(); ?></h3>
  <div class="entry-thumbnail"><?php the_post_thumbnail(); ?></div>
  <div class="entry-content">
    <?php the_content() ?>
  </div>
</article>