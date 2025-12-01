<?php
/**
 * Custom Taxonomies
 */

function saebu_register_departamento_taxonomy() {
    $labels = array(
        'name'              => 'Departamentos',
        'singular_name'     => 'Departamento',
        'search_items'      => 'Buscar Departamentos',
        'all_items'         => 'Todos los Departamentos',
        'parent_item'       => 'Departamento Padre',
        'parent_item_colon' => 'Departamento Padre:',
        'edit_item'         => 'Editar Departamento',
        'update_item'       => 'Actualizar Departamento',
        'add_new_item'      => 'Añadir Nuevo Departamento',
        'new_item_name'     => 'Nombre del Nuevo Departamento',
        'menu_name'         => 'Departamentos',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'departamento'),
        'show_in_rest'      => true,
    );

    register_taxonomy('departamento', array('noticia'), $args);
}
add_action('init', 'saebu_register_departamento_taxonomy');

// Crear términos de taxonomía por defecto
function saebu_create_default_departamentos() {
    $departamentos = array(
        'becas',
        'camping',
        'ceseu',
        'trabajo-social',
        'club-universitario',
        'dpto-deportes',
    );

    foreach ($departamentos as $depto) {
        if (!term_exists($depto, 'departamento')) {
            wp_insert_term($depto, 'departamento', array('slug' => $depto));
        }
    }
}
add_action('init', 'saebu_create_default_departamentos');
