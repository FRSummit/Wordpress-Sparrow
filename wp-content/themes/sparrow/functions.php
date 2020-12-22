<?php
add_theme_support('title-tag');

function sparrow_enqueue_style() {
    // Bootstrap CSS
    wp_enqueue_style ('bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    // Site CSS
    wp_enqueue_style ('style',get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    // Responsive CSS
    wp_enqueue_style ('responsive',get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0');
    // Custom CSS
    wp_enqueue_style ('custom',get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'sparrow_enqueue_style');

function sparrow_enqueue_script() {
    // ALL JS FILES
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), 1, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1, true);

    // ALL PLUGINS
    wp_enqueue_script('jquery_superslides', get_template_directory_uri() . '/assets/js/jquery.superslides.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap_select', get_template_directory_uri() . '/assets/js/bootstrap-select.js', array(), 1, true);
    wp_enqueue_script('inewsticker', get_template_directory_uri() . '/assets/js/inewsticker.js', array(), 1, true);
    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js.', array(), 1, true);
    wp_enqueue_script('images_loded', get_template_directory_uri() . '/assets/js/images-loded.min.js', array(), 1, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), 1, true);
    wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), 1, true);
    wp_enqueue_script('baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', array(), 1, true);
    wp_enqueue_script('form_validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), 1, true);
    wp_enqueue_script('contact_form_script', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), 1, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, true);
}
add_action('wp_enqueue_scripts', 'sparrow_enqueue_script');

// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register Menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);
