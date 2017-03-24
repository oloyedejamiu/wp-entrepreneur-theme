<?php

function wpentrepreneur_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'wpentrepreneur-style', get_stylesheet_uri(), $dependencies ); 
}

function wpentrepreneur_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'wpentrepreneur_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'wpentrepreneur_enqueue_scripts' );

function wpentrepreneur_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}


add_action( 'after_setup_theme', 'wpentrepreneur_wp_setup' );

function wpentrepreneur_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'wpentrepreneur_register_menu' );

function wpentrepreneur_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer_copyright_text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) ); 

    register_sidebar( array(
        'name'          => 'Footer - 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="before-footer-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );    

    register_sidebar( array(
        'name'          => 'Footer - 2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="before-footer-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );  

    register_sidebar( array(
        'name'          => 'Footer - 3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="before-footer-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) ); 

}
add_action( 'widgets_init', 'wpentrepreneur_widgets_init' );

?>