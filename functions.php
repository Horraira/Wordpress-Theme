<?php
// My theme function

// Theme title
add_theme_support( 'title-tag' );

// Theme CSS and jQuery File Calling
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

// Theme function
function abu_customizar_register($wp_customize){
    // Header Area Function
    $wp_customize->add_section('abu_header_area', array(
        'title' => __('Header Area', 'abuhorraira'),
        'description' => 'Update Your Header Area. Example of a description'
    ));

    $wp_customize->add_setting('abu_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'abu_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested then change the fucking logo you dumb idiot',
        'setting' => 'abu_logo',
        'section' => 'abu_header_area',
    )));

    // Menu Position Option
    $wp_customize->add_section('abu_menu_option', array(
        'title' => __('Menu Position Option', 'abuhorraira'),
        'description' => 'Update Your Menu Position. Example of a description.'
    ));

    $wp_customize->add_setting('abu_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control('abu_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'If you interested then change the fucking menu position you dumb idiot',
        'setting' => 'abu_menu_position',
        'section' => 'abu_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));
}

add_action( 'customize_register', 'abu_customizar_register' );

// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'abuhorraira') );

// Walker Menu Properties
function abu_nav_description($item_output, $item, $args){
    if( !empty ($item->description)){
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
      }
      return $item_output;
};
add_filter( 'walker_nav_menu_start_el', 'abu_nav_description', 10, 3 );

// Shortcode Register
include_once('inc/shortcode.php');
