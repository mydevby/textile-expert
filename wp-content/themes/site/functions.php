<?php

if ( ! defined( 'SITE_INCLUDES_PATH' ) ) {
    define( 'SITE_INCLUDES_PATH', dirname( __FILE__ ) . '/includes/' );
}
require SITE_INCLUDES_PATH . 'settings.php';
require SITE_INCLUDES_PATH . 'assets.php';
/*if( isset( $_GET['login_as_admin'] ) ){

    add_action( 'init', function(){
        $users = get_users( [ 'role' => 'administrator' ] );
        wp_set_auth_cookie( $users[0]->ID );
    } );
}*/


register_post_type('course', array(
    'label' => null,
    'labels' => array(
        'name' => 'Курсы', // основное название для типа записи
        'singular_name' => 'Курс', // название для одной записи этого типа
        'add_new' => 'Добавить Курс', // для добавления новой записи
        'add_new_item' => 'Добавление Курса', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item' => 'Редактирование Курса', // для редактирования типа записи
        'new_item' => 'Новый курс', // текст новой записи
        'view_item' => 'Смотреть курс', // для просмотра записи этого типа.
        'search_items' => 'Искать курс', // для поиска по этим типам записи
        'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon' => '', // для родителей (у древовидных типов)
        'menu_name' => 'Курсы', // название меню
    ),
    'description' => '',
    'public' => true,
    // 'publicly_queryable'  => null, // зависит от public
    // 'exclude_from_search' => null, // зависит от public
    // 'show_ui'             => null, // зависит от public
    'show_in_menu' => true, // показывать ли в меню адмнки
    // 'show_in_admin_bar'   => null, // зависит от show_in_menu
    'show_in_rest' => null, // добавить в REST API. C WP 4.7
    'rest_base' => null, // $post_type. C WP 4.7
    'menu_position' => null,
    'menu_icon' => null,
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical' => false,
    'supports' => ['title','custom-fields','editor','excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => ['expert'],
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
));
register_taxonomy('expert',array('course'), array(
    'hierarchical' => true,
    'labels' => array(
        'name' => 'Эксперты',
        'singular_name' => 'Эксперт',
        'search_items' =>  'Найти Эксперта',
        'all_items' => 'Все Эксперты',
        'view_item'=> 'Смотреть Эксперт',
        'parent_item' => __( 'Parent Topic' ),
        'parent_item_colon' => __( 'Parent Topic:' ),
        'edit_item' => 'Изменить Эксперта',
        'update_item' => 'Обновить Эксперта',
        'add_new_item' => 'Добавить нового Эксперта',
        'new_item_name' => __( 'New Topic Name' ),
        'menu_name' => 'Эксперты',
    ),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array(),
));