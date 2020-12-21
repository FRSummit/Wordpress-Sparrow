<?php

add_theme_support('title-tag');

function sparrow_enqueue_style()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0');
    wp_enqueue_style('simple-line-icons', get_template_directory_uri() . '/assets/css/simple-line-icons.css', array(), '1.0');
    wp_enqueue_style('revslider', get_template_directory_uri() . '/assets/css/revslider.css', array(), '1.0');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0');
    wp_enqueue_style('jquery-bxslider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css', array(), '1.0');
    wp_enqueue_style('jquery-mobile-menu', get_template_directory_uri() . '/assets/css/jquery.mobile-menu.css', array(), '1.0');
    
    // wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0');
    // wp_enqueue_style('blogmate', get_template_directory_uri() . '/assets/css/blogmate.css', array(), '1.0');
    // wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', array(), '1.0');
    // wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), '1.0');
    // wp_enqueue_style('internal', get_template_directory_uri() . '/assets/css/internal.css', array(), '1.0');
    // wp_enqueue_style('site-icons', get_template_directory_uri() . '/assets/css/site-icons.css', array(), '1.0');
    // wp_enqueue_style('slider', get_template_directory_uri() . '/assets/css/slider.css', array(), '1.0');

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'sparrow_enqueue_style');

function sparrow_enqueue_script()
{
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), 1, true);
    wp_enqueue_script('revslider', get_template_directory_uri() . '/assets/js/revslider.js', array(), 1, true);
    wp_enqueue_script('common', get_template_directory_uri() . '/assets/js/common.js', array(), 1, true);
    wp_enqueue_script('jquery-bxslider-min', get_template_directory_uri() . '/assets/js/jquery.bxslider.min.js', array(), 1, true);
    wp_enqueue_script('owl-carousel-min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('jquery-mobile-menu-min', get_template_directory_uri() . '/assets/js/jquery.mobile-menu.min.js', array(), 1, true);
    
    // wp_enqueue_script('cloud-zoom', get_template_directory_uri() . '/assets/js/cloud-zoom.js', array(), 1, true);
    // wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), 1, true);
    // wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), 1, true);
    // wp_enqueue_script('left-nav', get_template_directory_uri() . '/assets/js/left-nav.js', array(), 1, true);
    // wp_enqueue_script('revolution-extension', get_template_directory_uri() . '/assets/js/revolution.extension.js', array(), 1, true);
    // wp_enqueue_script('revolution-slider', get_template_directory_uri() . '/assets/js/revolution-slider.js', array(), 1, true);
    // wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array(), 1, true);
}
add_action('wp_enqueue_scripts', 'sparrow_enqueue_script');
