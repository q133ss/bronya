<?php
add_theme_support('post-thumbnails');


add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'post_type_name', [
        'label'  => null,
        'labels' => [
            'name'               => 'Устройства', // основное название для типа записи
            'singular_name'      => 'Устройство', // название для одной записи этого типа
            'add_new'            => 'Добавить устройство', // для добавления новой записи
            'add_new_item'       => 'Добавление устройства', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование устройства', // для редактирования типа записи
            'new_item'           => 'Новое устройство', // текст новой записи
            'view_item'          => 'Смотреть устройство', // для просмотра записи этого типа.
            'search_items'       => 'Искать устройство', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Устройства', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}


add_action( 'init', 'plenki' );
function plenki(){
    register_post_type( 'plenka', [
        'label'  => null,
        'labels' => [
            'name'               => 'Пленка', // основное название для типа записи
            'singular_name'      => 'Пленка', // название для одной записи этого типа
            'add_new'            => 'Добавить пленку', // для добавления новой записи
            'add_new_item'       => 'Добавление пленки', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование пленки', // для редактирования типа записи
            'new_item'           => 'Новая пленка', // текст новой записи
            'view_item'          => 'Смотреть пленку', // для просмотра записи этого типа.
            'search_items'       => 'Искать пленку', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Пленки', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => ['thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}