<?php
add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('admin_init', 'display_theme_panel_fields');
add_action('after_setup_theme', 'livingstone_setup');

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

function display_theme_panel_fields() {
    add_settings_section("section", "All Settings", 'as_test', "theme-options");
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");
    register_setting("section", "logo", "handle_logo_upload");
}

function livingstone_setup() {
    register_nav_menus( array(
        'primary'   => __('Primary menu', 'myfirsttheme' ),
        'social' => __('Social media menu', 'myfirsttheme' )
    ) );
}

add_theme_support('custom-logo');

require_once(get_template_directory() . "/utility/nav-menu-walker.php");
require_once(get_template_directory() . "/utility/social-menu-walker.php");
require_once(get_template_directory() . "/utility/customization.php");
require_once(get_template_directory() . "/utility/func.php");

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>