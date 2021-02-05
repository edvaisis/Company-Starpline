<?php

function company_starpline_files()
{

    /* Load js */
    /*wp_enqueue_script('slider_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);*/
    /* Carousel js */
    wp_enqueue_script('carousel_js', get_theme_file_uri('/js/carousel.js'), NULL, '1.0', true);
    /* Load google fonts */

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    /* Load bootstrap from web */
    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_register_script('Slick', 'cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.jss', null, null, true );
wp_enqueue_script('Slick');

    wp_enqueue_style('load_boostarp', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');

    /* Call stylesheet file */
    wp_enqueue_style('company_starpline_main_files', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'company_starpline_files');

function wpb_custom_new_menu()
{
    register_nav_menu('top-menu', __('Top Menu'));
}

add_action('init', 'wpb_custom_new_menu');
