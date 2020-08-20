<?php

function css_js_scripts(){
    wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap');
    wp_enqueue_style('boostrap',get_template_directory_uri(). '/css/bootstrap.custom.min.css');
    wp_enqueue_style('style_css',get_template_directory_uri() .'/css/style.css');
    wp_enqueue_style('home_css',get_template_directory_uri() .'/css/home_1.css');
    wp_enqueue_style('custom_css',get_template_directory_uri() .'/css/custom.css');

  wp_enqueue_script('comman_script',get_template_directory_uri() .'/js/common_scripts.min.js','','1.0',true);
    wp_enqueue_script('main_js',get_template_directory_uri() .'/js/main.js','','1.0',true);
    wp_enqueue_script('home_js',get_template_directory_uri() .'/js/carousel-home.min.js','','1.0',true);


}
add_action('wp_enqueue_scripts','css_js_scripts');


function theme_supports(){
    add_theme_support('menus');
    add_theme_support('custom-background');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','theme_supports');

function menu_format(){
register_nav_menus(
    array(
        "primary" => __('primary-menu','Allaia'),
        'footer' => __('footer','Allaia')
    )
);}

add_action('after_setup_theme','menu_format');

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';}
add_action('after_setup_theme','register_navwalker');
