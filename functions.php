<?php

register_nav_menus(
    array(
        'main_menu' => 'Main Menu (Header)',
        'footer_menu' => 'Footer Menu',
    )
);


add_action( 'wp_enqueue_scripts', function ()
{
    //enqueue scripts
    wp_enqueue_script(
        'techcareers-theme-scripts',

        get_theme_file_uri( '/assets/js/scripts.js' ),

        array(),
        //version number
        strftime( get_theme_file_uri( '/assets/js/scripts.js' ) ),
        
        FALSE
    );

    //enqueue stylesheet
    wp_enqueue_style(

        'techcareers-theme-main-styles',

        get_theme_file_uri( '/assets/css/main.css' ),

        strftime( get_theme_file_uri( '/assets/css/main.css' ) ),

        'all'
    );
} );
