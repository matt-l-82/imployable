<?php 

function load_stylesheet() {

    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), false, false );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'stylesheet', get_template_directory_uri() . '/dist/css/main.css', array(), false, 'all' );
    wp_enqueue_style('stylesheet');

    wp_register_style( 'phonestyles', get_template_directory_uri() . '/dist/css/devices.css', array(), false, 'all' );
    wp_enqueue_style('phonestyles');

}

add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_js() {

    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), false, false );
    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.1/TweenMax.min.js', array(), false, false );
    wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js', array(), false, false );
    wp_enqueue_script('animationgsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js', array(), false, false );
    wp_enqueue_script('gsapText', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js', array(), false, false );
    wp_enqueue_script('gsapScrollTo', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js', array(), false, false );
    wp_enqueue_script('gsapScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), false, false );
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), false, false);

    wp_register_script('customjs', get_template_directory_uri() . '/custom-js/custom.js', array(), false , true );
    wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus(

    array(
        'main-menu' => __('Main Menu', 'theme'),
        'mobile-menu' => __('Mobile Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
        )
    );

