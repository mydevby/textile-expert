<?php

add_action( 'wp_enqueue_scripts', 'pack_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'pack_enqueue_script' );



if ( ! function_exists( 'pack_enqueue_style' ) ) {
    function pack_enqueue_style() {


        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false, 1);
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.css', false, 1);
        wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', false, 1);

        wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', false, 1);

    }
}


if ( ! function_exists( 'pack_enqueue_script' ) ) {

    function pack_enqueue_script()
    {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js',array(),null, true);
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),null, true);
        wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js',array(),null, true);
        wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/common.js',array(),null, true);

        wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js',array(),null, true);

        wp_add_inline_script('jquery', "var $ = jQuery.noConflict();");
        wp_localize_script('main', 'ajaxdata',
            array(
                'url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce(),
            )
        );  
    }
}

