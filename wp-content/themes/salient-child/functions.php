<?php
function netbeez_enqueue_styles() {

    $parent_style = 'main-styles';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script( 'netbeez-js', get_stylesheet_directory_uri() . '/netbeez.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'netbeez_enqueue_styles' );

?>