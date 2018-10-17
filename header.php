<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- <link rel="icon" type="image/png" href="/wp-content/uploads/YEAR/MONTH/YOUR_LOGO.png" sizes="86x119"> -->

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">

    <?php wp_head(); ?>
    <?php include_once(__DIR__ .'/schema.php'); ?>
  </head>

  <body <?php body_class(); ?>>

    <header>
      <div class="row">
        <div class="columns large-5 header-text">
          <h1 id="site-title"><?php echo get_bloginfo('name'); ?></h1>
        </div>

        <div class="columns large-6 header-text">
          <div class="float-right">
            <?php
              wp_nav_menu([
                'theme_location' => 'main-menu',
                'menu_class' => 'menu dropdown',
                'container' => 'ul'
              ]);
            ?>
          </div>
        </div>
      </div>
    </header>
