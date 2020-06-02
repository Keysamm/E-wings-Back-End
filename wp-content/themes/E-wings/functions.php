<?php
add_action('wp_enqueue_scripts', 'ewings_styles');
add_action('wp_enqueue_scripts', 'ewings_scripts');

function ewings_styles() {
    wp_enqueue_style('ewings-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
};

function ewings_scripts() {
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/index.js', array(), null, true);
};

?>