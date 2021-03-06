<?php

add_action('wp_enqueue_scripts', 'ewings_styles');
add_action('wp_enqueue_scripts', 'ewings_scripts');

function ewings_styles() {
    wp_enqueue_style('ewings-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/assets/css/animate.css');

};

function ewings_scripts() {
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, false );
    wp_enqueue_script('ewings-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('bootsptap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

//Disconnect Xmlrpc.php
add_filter('xmlrpc_enabled', '__return_false');

?>