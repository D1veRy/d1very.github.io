<?php 

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style ('fonts-googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style ('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style ('fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style ('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');


    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');


	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), 'null', true);


});


add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

?>