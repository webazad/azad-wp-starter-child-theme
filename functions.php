<?php
/**
 * ----------------------------------------------------------------
 * CHILD THEME CODE
 * ----------------------------------------------------------------
 */
function azad_enqueue_scripts() {
    wp_register_style( 'parent-theme-style', get_template_directory_uri() .'/style.css', array(), wp_get_theme('twentyseventeen')->get('Version'), 'all' );
    wp_register_style( 'child-theme-style', get_stylesheet_directory_uri(), array('parent-theme-style'), wp_get_theme()->get('Version'), 'all');

    wp_enqueue_style( 'parent-theme-style', get_template_directory_uri() .'/style.css' );
    wp_enqueue_style( 'child-theme-style');
    
}
add_action( 'wp_enqueue_scripts', 'azad_enqueue_scripts');
function azad_child_theme_setup() {
    load_child_theme_textdomain( 'azad-child-theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'azad_child_theme_setup' );