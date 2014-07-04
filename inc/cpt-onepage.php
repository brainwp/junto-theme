<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/07/14
 * Time: 15:19
 */
add_action( 'init', 'create_post_type_acoes' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_acoes() {

    /**
     * Labels customizados para o tipo de post
     */
    $labels = array(
        'name' => _x('One Page', 'post type general name'),
        'singular_name' => _x('One Page', 'post type singular name'),
        'add_new' => _x('Nova Page', 'itens'),
        'add_new_item' => __('Nova Page'),
        'edit_item' => __('Editar Pagina'),
        'new_item' => __('Nova Pagina'),
        'all_items' => __('Todas Paginas'),
        'view_item' => __('Ver Pagina'),
        'search_items' => __('Procurar Pagina'),
        'not_found' =>  __('Nenhuma Pagina Encontrada'),
        'not_found_in_trash' => __('Nenhuma Pagina encontrada no Lixo'),
        'parent_item_colon' => '',
        'menu_name' => 'Configuração do One Page'
    );

    /**
     * Registamos o tipo de post colecoes através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'onepage', array(
            'labels' => $labels,
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            /*'has_archive' => 'itens',*/
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'onepage',
                'with_front' => false,
            ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 2,
            'supports' => array('title','editor')
        )
    );
    flush_rewrite_rules();

}