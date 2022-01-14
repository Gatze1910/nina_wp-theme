<?php
function add_theme_scripts() { 
    wp_enqueue_style( 'reset',  get_template_directory_uri() .'/styles/reset.css', array(), null, 'all' );
    wp_enqueue_style( 'style',  get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array(), null, true); 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); 
add_theme_support('title-tag');

add_theme_support( 'post-thumbnails' );

function cc_mime_types($mimes) { 
    $mimes['svg'] = 'image/svg+xml'; 
    return $mimes; 
} 
add_filter('upload_mimes', 'cc_mime_types');

function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

function currentYear(){
      return date('Y');
}

