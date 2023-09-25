<?php ?>

  <footer class="site-footer" id="site-footer">
  <?php wp_nav_menu(array(
    'theme_location' => "main_social",
    "container" => "nav",
    "container_class" => "main_social",
    "container_id" => "main_social"
  )); ?>
  </footer>
  </main>   <!-- .site-main -->
</div>      <!-- .content-area -->
<?php wp_footer(); ?>
</body>
</html>