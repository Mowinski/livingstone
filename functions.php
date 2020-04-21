<?php
  add_action('wp_enqueue_scripts', 'theme_styles');
  add_action('wp_enqueue_scripts', 'theme_scripts');
 

  function theme_styles() {
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper/css/swiper.min.css');
    wp_enqueue_style( 'livingstone-style', get_stylesheet_uri() );
  }

  function theme_scripts() {
    wp_enqueue_script("relax", "https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js");
    wp_enqueue_script("swiper", "https://unpkg.com/swiper/js/swiper.min.js");
    wp_enqueue_script("smooth-scrool", "https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js");
    wp_enqueue_script('livingstone-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), null, true);
  }

  add_theme_support('custom-logo');
  
?>