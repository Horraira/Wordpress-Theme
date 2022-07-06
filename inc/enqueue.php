<?php

function abu_css_js_file_calling(){
    // style file
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '4.0.0', 'all' );
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'abu-style', get_stylesheet_uri( ) );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'custom' );


    // jQuery
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '4.0.0', 'true' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
};

add_action( 'wp_enqueue_scripts', 'abu_css_js_file_calling' );

// Google Fonts Enqueue
function abu_add_google_fonts(){
    wp_enqueue_style( 'abu_google_fonts', 'https://fonts.googleapis.com/css2?family=Arima&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'abu_add_google_fonts' );
