<?php

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

    // Footer Option
    $wp_customize->add_section('abu_footer_option', array(
        'title' => __('Menu Footer Option', 'abuhorraira'),
        'description' => 'Update Your Footer Position. Example of a description.'
    ));

    $wp_customize->add_setting('abu_copyright_section', array(
        'default' => '&copy; Copyright 2021 | SENHAS',
    ));

    $wp_customize->add_control('abu_copyright_section', array(
        'label' => 'Copyright Section',
        'description' => 'If you interested then change the fucking Copyright position you dumb idiot',
        'setting' => 'abu_copyright_section',
        'section' => 'abu_footer_option',
    ));
}

add_action( 'customize_register', 'abu_customizar_register' );