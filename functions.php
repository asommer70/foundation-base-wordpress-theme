<?php

// Enable default image for posts/pages.
add_theme_support( 'post-thumbnails' );

//
// Register Stylesheet and JavaScript files.
//
function fbt_scripts() {
  // Stylesheet files.
  wp_enqueue_style( 'foundation_styles', get_theme_file_uri( '/assets/css/main.css' ), array( ), '1.0' );
  wp_enqueue_style( 'foundation_icons_css', get_theme_file_uri( '/assets/fonts/foundation-icons.css' ), [], '1.0' );
//wp_enqueue_style( 'fbt_style', get_stylesheet_uri() );

  // JavaScript files.
  wp_enqueue_script( 'foundation', get_theme_file_uri( '/assets/js/vendor/foundation.min.js' ), array('jquery'), '', true );
  wp_enqueue_script( 'main', get_theme_file_uri( '/assets/js/main.js' ), array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'fbt_scripts');


//
// Setup the menus.
//
function fbt_menus() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action('init', 'fbt_menus');

//
// Add categories to Pages.
//
function fbt_register_page_categories() {
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'fbt_register_page_categories');


//
// Add Open Graph/social meta tags.
//
function fbt_meta_tags() {
  global $post;

  $post_thumbnail_id = get_post_thumbnail_id( $post_id );
  $custom_fields = get_post_custom($post_id);
  $description = $custom_fields['description'];

  ?>

  <meta property="og:title" content="<?php echo $post->post_title; ?>">
  <meta property="og:url" content="<?php echo get_permalink($post); ?>">
  <meta property="og:image" content="<?php echo wp_get_attachment_image_src($post_thumbnail_id, ['600x315'])[0]; ?>">
  <meta property="og:description" content="<?php echo $description[0]; ?>">

  <meta name="description" content="<?php echo $description[0]; ?>">
  <link rel="canonical" href="<?php echo get_permalink($post); ?>">

  <?php
}
add_action('wp_head', 'fbt_meta_tags');
