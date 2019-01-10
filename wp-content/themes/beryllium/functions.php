<?php

//Registro de archivos

function register_enqueue_style(){
    $theme_data = wp_get_theme();

    //Registrando estilos
    wp_register_style('Google Fonts', 
    'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700', 
    null, '1.0.0', 'screen');
    
    wp_register_style('Animate.css', 
    get_parent_theme_file_uri('/assets/css/animate.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Icomoon Icon Fonts', 
    get_parent_theme_file_uri('/assets/css/icomoon.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Themify Icons', 
    get_parent_theme_file_uri('/assets/css/icomoon.css'), 
    null, '1.0.0', 'screen');

    wp_register_style('Bootstrap', 
    get_parent_theme_file_uri('/assets/css/bootstrap.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Owl Carousel1', 
    get_parent_theme_file_uri('/assets/css/owl.carousel.min.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Owl Carousel2', 
    get_parent_theme_file_uri('/assets/css/owl.theme.default.min.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Theme style', 
    get_parent_theme_file_uri('/assets/css/style.css'), 
    null, '1.0.0', 'screen');

    //Enqueue estilos
    wp_enqueue_style('Google Fonts');
    wp_enqueue_style('Animate.css');
    wp_enqueue_style('Icomoon Icon Fonts');
    wp_enqueue_style('Themify Icons');
    wp_enqueue_style('Bootstrap');
    wp_enqueue_style('Owl Carousel1');
    wp_enqueue_style('Owl Carousel2');
    wp_enqueue_style('Theme style');

}

add_action('wp_enqueue_scripts', 'register_enqueue_style');

//registro de scripts

function register_enqueue_scripts(){
    $theme_data = wp_get_theme();
    
    //deregister scripts
    wp_deregister_script('Modernizr JS');
    wp_deregister_script('jQuery');
    wp_deregister_script('jQuery Easing');
    wp_deregister_script('Bootstrap');
    wp_deregister_script('Waypoints');
    wp_deregister_script('Carousel');
    wp_deregister_script('Main');

    //registrando scripts
    wp_register_script('Modernizr JS', 
    get_parent_theme_file_uri('/assets/js/modernizr-2.6.2.min.js'), 
    null, '3.2.1', true);

    wp_register_script('jQuery', 
    get_parent_theme_file_uri('/assets/js/jquery.min.js'), 
    null, '3.2.1', true);

    wp_register_script('jQuery Easing', 
    get_parent_theme_file_uri('/assets/js/jquery.easing.1.3.js'), 
    null, '3.2.1', true);

    wp_register_script('Bootstrap', 
    get_parent_theme_file_uri('/assets/js/bootstrap.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Waypoints', 
    get_parent_theme_file_uri('/assets/js/jquery.waypoints.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Carousel', 
    get_parent_theme_file_uri('/assets/js/owl.carousel.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Main', 
    get_parent_theme_file_uri('/assets/js/main.js'), 
    null, '3.2.1', true);

    //Enqueue scripts
    wp_enqueue_script('Modernizr JS');
    wp_enqueue_script('jQuery');
    wp_enqueue_script('jQuery Easing');
    wp_enqueue_script('Bootstrap');
    wp_enqueue_script('Waypoints');
    wp_enqueue_script('Carousel');
    wp_enqueue_script('Main');
    
}

add_action('wp_enqueue_scripts', 'register_enqueue_scripts');

?>