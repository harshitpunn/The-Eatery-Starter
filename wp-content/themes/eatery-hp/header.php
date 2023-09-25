<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="site-brandig">
    <?php the_custom_logo(); ?>
    <div class="site-title">
      <?php bloginfo('name'); ?>
    </div>
    <div class="site-description">
    <?php bloginfo('description'); ?>
    </div>
  </div>
  <?php wp_nav_menu(array(
    'theme_location' => "main_menu",
    "container" => "nav",
    "container_class" => "main_menu",
    "container_id" => "main_menu"
  )); ?>

<?php wp_nav_menu(array(
    'theme_location' => "main_social",
    "container" => "nav",
    "container_class" => "main_social",
    "container_id" => "main_social"
  )); ?>
</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    