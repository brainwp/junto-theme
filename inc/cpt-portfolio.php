<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/07/14
 * Time: 10:16
 */
// Register Custom Post Type
function register_cpt_portfolio() {

    $labels = array(
        'name'                => 'Portfólio',
        'singular_name'       => 'Portfólio',
        'menu_name'           => 'Portfólio',
        'parent_item_colon'   => 'Item parente',
        'all_items'           => 'Todos itens',
        'view_item'           => 'Ver item',
        'add_new_item'        => 'Adicionar novo portfólio',
        'add_new'             => 'Adicionar novo',
        'edit_item'           => 'Editar portfólio',
        'update_item'         => 'Atualizar item',
        'search_items'        => 'Buscar item',
        'not_found'           => 'Item não encontrado',
        'not_found_in_trash'  => 'Item não encontrado na lixeira',
    );
    $args = array(
        'label'               => 'portfolio',
        'description'         => 'Post Type Description',
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 2,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'portfolio', $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_cpt_portfolio', 0 );
