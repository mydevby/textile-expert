<?php

if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

    remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );


    add_action( 'admin_init', function(){
        remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Настройки сайта',
        'menu_title'	=> 'Настройки сайта',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));



}

register_nav_menus( array(
    'front' => __( 'Front Menu', 'Главное меню' ),
) );



add_filter( 'wp_get_attachment_image_src', 'disable_size',10,4 );
function disable_size($image, $attachment_id, $size, $icon) {
    $image[1]='';
    $image[2]='';
    return $image;
}
?>