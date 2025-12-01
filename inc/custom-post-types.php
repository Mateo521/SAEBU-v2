<?php
/**
 * Custom Post Types
 */

function saebu_register_noticia_post_type() {
    $labels = array(
        'name'                  => 'Noticias',
        'singular_name'         => 'Noticia',
        'menu_name'             => 'Noticias',
        'add_new'               => 'Añadir Nueva',
        'add_new_item'          => 'Añadir Nueva Noticia',
        'edit_item'             => 'Editar Noticia',
        'new_item'              => 'Nueva Noticia',
        'view_item'             => 'Ver Noticia',
        'search_items'          => 'Buscar Noticias',
        'not_found'             => 'No se encontraron noticias',
        'not_found_in_trash'    => 'No hay noticias en la papelera',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'noticia'),
        'capability_type'       => 'post',
        'has_archive'           => 'noticias',
        'hierarchical'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-megaphone',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'revisions'),
        'show_in_rest'          => true,
    );

    register_post_type('noticia', $args);
}
add_action('init', 'saebu_register_noticia_post_type');
