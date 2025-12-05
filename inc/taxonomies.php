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

// Crear términos de taxonomía por defecto (CORREGIDO)
function saebu_create_default_departamentos() {
    $departamentos = array(
        'becas'                => 'Becas',
        'camping'              => 'Camping',
        'ceseu'                => 'CeSEU',
        'dpto-trabajo-social'  => 'Dpto. Trabajo Social',
        'club-universitario'   => 'Club Universitario',
        'dpto-deportes'        => 'Dpto. Deportes',
    );

    foreach ($departamentos as $slug => $nombre) {
        if (!term_exists($slug, 'departamento')) {
            wp_insert_term(
                $nombre,              // Nombre visible
                'departamento',       // Taxonomía
                array('slug' => $slug) // URL amigable
            );
        }
    }
}
add_action('init', 'saebu_create_default_departamentos');
