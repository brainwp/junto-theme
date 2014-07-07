<?php

add_action( 'init', '_register_field_groups', 999 );
function _register_field_groups() {

	if( ! function_exists( 'register_field_group' ) )
		return false;

	/* Opções */
    global $pagenow;
    if($pagenow == 'post.php' && isset($_GET['post'])){
        $post = get_post($_GET['post']);
        if($post->post_type = 'onepage' && $post->post_name == 'clientes'){
            register_field_group(array (
                'id' => 'acf_clientes',
                'title' => 'Clientes',
                'fields' => array (
                    array (
                        'key' => 'field_53baab21e185a',
                        'label' => 'Exibir seção Clientes?',
                        'name' => 'op_exibir_clientes',
                        'type' => 'true_false',
                        'instructions' => 'Marque essa opção para exibir a seção Clientes.',
                        'message' => '',
                        'default_value' => 0,
                    ),
                    array (
                        'key' => 'field_53baacdfe185c',
                        'label' => 'Quantidade de logos',
                        'name' => 'op_quantidade_logos_clientes',
                        'type' => 'number',
                        'instructions' => 'Adicione a quantidade de logos que deseja exibir. Caso não marque, o valor padrão será 15',
                        'default_value' => 15,
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array (
                        'key' => 'field_53baad24e185d',
                        'label' => 'Link para ver todos?',
                        'name' => 'op_ver_todos_clientes',
                        'type' => 'true_false',
                        'instructions' => 'Marque essa opção caso queira exibir um link para ver todos Clientes',
                        'message' => '',
                        'default_value' => 0,
                    ),
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'onepage',
                            'order_no' => 0,
                            'group_no' => 0,
                        ),
                    ),
                ),
                'options' => array (
                    'position' => 'normal',
                    'layout' => 'no_box',
                    'hide_on_screen' => array (
                    ),
                ),
                'menu_order' => 0,
            ));
        }
    }
}
