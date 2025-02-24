<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

    wp_enqueue_style( 'websussed-core-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'websussed-child-style', get_stylesheet_directory_uri() . '/style.css', array('websussed-core-style') );
}

function webussed_child_add_fonts() {

    wp_register_style('google-fonts-async-defer', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('google-fonts-async-defer');

}

add_action( 'wp_enqueue_scripts', 'webussed_child_add_fonts' );

