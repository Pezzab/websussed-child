<?php

function websussed_child_enqueue_styles() {
$parent_style = 'parent-style';
   wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
}
add_action( 'wp_enqueue_scripts', 'websussed_child_enqueue_styles' ); 

function websussed_child_unhook_parent_style() {

  wp_dequeue_style( 'websussed-core' );
  wp_deregister_style( 'websussed-core' );

}
add_action( 'wp_enqueue_scripts', 'websussed_child_unhook_parent_style', 20 );

function webussed_child_add_fonts() {

    wp_register_style('google-fonts-async-defer', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('google-fonts-async-defer');

}

add_action( 'wp_enqueue_scripts', 'webussed_child_add_fonts' );

