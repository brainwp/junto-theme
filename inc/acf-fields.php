<?php
add_action('acf/register_fields', 'my_register_fields');
function my_register_fields()
{
    include_once(get_template_directory() . '/inc/acf-repeater/repeater.php');
}

add_action('init', '_register_field_groups', 999);
function _register_field_groups()
{

    if (!function_exists('register_field_group'))
        return false;
    /* Clientes */
    $_post = get_page_by_path('clientes', OBJECT, 'onepage');
    register_field_group(array(
        'id' => 'acf_clientes',
        'title' => 'Clientes',
        'fields' => array(
            array(
                'key' => 'field_53baab21e185a',
                'label' => 'Exibir seção Clientes?',
                'name' => 'op_exibir_clientes',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir a seção Clientes.',
                'message' => '',
                'default_value' => 0,
            ),
            array(
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
            array(
                'key' => 'field_53baad24e185d',
                'label' => 'Link para ver todos?',
                'name' => 'op_ver_todos_clientes',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção caso queira exibir um link para ver todos Clientes',
                'message' => '',
                'default_value' => 0,
            ),
            array(
                'key' => 'field_53baab21e185e',
                'label' => 'Exibir item no menu?',
                'name' => 'op_exibir_menu_clientes',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir o link Clientes no menu.',
                'message' => '',
                'default_value' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'onepage',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
                array(
                    'param' => 'post',
                    'operator' => '==',
                    'value' => $_post->ID,
                    'order_no' => 1,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));

    /* Cases */
    $_cases = get_page_by_path('cases', OBJECT, 'onepage');
    register_field_group(array (
        'id' => 'acf_cases',
        'title' => 'Cases',
        'fields' => array (
            array(
                'key' => 'field_53be6afa6edb5',
                'label' => 'Exibir seção Cases?',
                'name' => 'op_exibir_cases',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir a seção Cases na Home do site',
                'message' => '',
                'default_value' => 1,
            ),
            array(
                'key' => 'field_53be6b416edb6',
                'label' => 'Quantos Cases?',
                'name' => 'op_quantidade_de_cases',
                'type' => 'number',
                'instructions' => 'Adicione a quantidade de Cases que deseja exibir. O valor padrão é 3.',
                'default_value' => 3,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_53be6e5a6edbe',
                'label' => 'Exibir Cases no menu?',
                'name' => 'op_exibir_menu_cases',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir o link Cases no menu',
                'message' => '',
                'default_value' => 1,
            ),
            array(
                'key' => 'field_53be6bae6edb7',
                'label' => 'Rodapé Cases',
                'name' => '',
                'type' => 'message',
                'message' => 'Os campos abaixo são para configuração do rodapé da seção Cases, onde você pode configurar ícones, descrições e etc.',
            ),
            array(
                'key' => 'field_53be6c4c6edb8',
                'label' => 'Ícone de Donwload',
                'name' => 'op_icone_download',
                'type' => 'image',
                'instructions' => 'Adicione um ícone para p botão de download. O mesmo deve ter medidas de 100x100px.',
                'save_format' => 'url',
                'preview_size' => 'full',
                'library' => 'uploadedTo',
            ),
            array(
                'key' => 'field_53be6d186edb9',
                'label' => 'Descrição de Download',
                'name' => 'op_desc_download',
                'type' => 'text',
                'instructions' => 'Adicione uma descrição curta para o botão de download. A descrição padrão é: Faça download do nosso portfólio completo',
                'default_value' => 'Faça download do nosso portfólio completo',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => 80,
            ),
            array(
                'key' => 'field_53be6da36edbb',
                'label' => 'Ícone de Orçamento',
                'name' => 'op_icone_orcamento',
                'type' => 'image',
                'instructions' => 'Adicione um ícone para p botão de orçamento. O mesmo deve ter medidas de 100x100px.',
                'save_format' => 'url',
                'preview_size' => 'full',
                'library' => 'uploadedTo',
            ),
            array(
                'key' => 'field_53be6df46edbc',
                'label' => 'Descrição de Orçamento',
                'name' => 'op_desc_orcamento',
                'type' => 'text',
                'instructions' => 'Adicione uma descrição curta para o botão de orçamento. A descrição padrão é: Solicite um orçamento para suas demandas',
                'default_value' => 'Solicite um orçamento para suas demandas',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => 80,
            ),
            array(
                'key' => 'field_53be6e5a6edbd',
                'label' => 'Exibir botão Outros Cases?',
                'name' => 'op_exibir_outros_cases',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir um botão Outros Cases linkando para uma listagem com todos os Cases publicados.',
                'message' => '',
                'default_value' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'onepage',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
                array(
                    'param' => 'post',
                    'operator' => '==',
                    'value' => $_cases->ID,
                    'order_no' => 1,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    /* Metodologia */
    $_metodologia = get_page_by_path('metodologia', OBJECT, 'onepage');
    register_field_group(array (
        'id' => 'acf_metodologia',
        'title' => 'Metodologia',
        'fields' => array(
            array(
                'key' => 'field_53cd7731328d0',
                'label' => 'Exibir seção Metodologia?',
                'name' => 'op_exibir_metodologia',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir a seção Metodologia na Home do site',
                'message' => '',
                'default_value' => 1,
            ),
            array(
                'key' => 'field_53cd776f328d1',
                'label' => 'Exibir Metodologia no menu?',
                'name' => 'metodologia_menu',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array(
                'key' => 'field_53ce41e3e65c7',
                'label' => 'Título da Primeira Metodologia',
                'name' => 'titulo_primeira_metodologia',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_53cd778c328d2',
                'label' => 'Primeira Metodologia',
                'name' => 'primeira_metodologia',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_53ce4212e65c8',
                'label' => 'Título da Segunda Metodologia',
                'name' => 'titulo_segunda_metodologia',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_53cd77b4328d5',
                'label' => 'Segunda Metodologia',
                'name' => 'segunda_metodologia',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_53ce42dbe65c9',
                'label' => 'Título da Terceira Metodologia',
                'name' => 'titulo_terceira_metodologia',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_53cd77b3328d4',
                'label' => 'Terceira Metodologia',
                'name' => 'terceira_metodologia',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array(
                'key' => 'field_53ce42f4e65ca',
                'label' => 'Título da Quarta Metodologia',
                'name' => 'titulo_quarta_metodologia',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_53cd77b1328d3',
                'label' => 'Quarta Metodologia',
                'name' => 'quarta_metodologia',
                'type' => 'textarea',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'onepage',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
                array(
                    'param' => 'post',
                    'operator' => '==',
                    'value' => $_metodologia->ID,
                    'order_no' => 1,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'custom_fields',
                4 => 'discussion',
                5 => 'comments',
                6 => 'revisions',
                7 => 'slug',
                8 => 'author',
                9 => 'format',
                10 => 'featured_image',
                11 => 'categories',
                12 => 'tags',
                13 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));





    require get_template_directory() . '/inc/odin-metabox.php';
    $clientes_img = new Odin_Metabox(
        'clientes_img', // Slug/ID do Metabox (obrigatório)
        'Clientes Imagens', // Nome do Metabox  (obrigatório)
        'onepage', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
        'advanced', // Contexto (opções: normal, advanced, ou side) (opcional)
        'high', // Prioridade (opções: high, core, default ou low) (opcional)
        (string)$_post->ID
    );
    $clientes_img->set_fields(
        array(
            array(
                'id' => 'clientes_img_box', // Obrigatório
                'label' => 'Selecione ou faça upload dos logos de clientes', // Obrigatório
                'type' => 'image_plupload', // Obrigatório
                'default' => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
                'description' => '', // Opcional
            )
        )
    );
    //portfolio
    if(function_exists("register_field_group"))
    {
        register_field_group(array (
            'id' => 'acf_in_home',
            'title' => 'Portfólio',
            'fields' => array (
                array (
                    'key' => 'field_53cd386fba440',
                    'label' => 'Visível na página inicial (home) ?',
                    'name' => 'in_home',
                    'type' => 'true_false',
                    'message' => '',
                    'default_value' => 1,
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'portfolio',
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
    //missao
    $_missao = get_page_by_path('missao', OBJECT, 'onepage');
    if(function_exists("register_field_group"))
    {
        register_field_group(array (
            'id' => 'acf_missao',
            'title' => 'Missão',
            'fields' => array (
                array(
                'key' => 'field_53dfbedacaff8',
                'label' => 'Exibir seção Missão?',
                'name' => 'op_secao_missao',
                'type' => 'true_false',
                'instructions' => 'Marque essa opção para exibir a seção Missão na Home do site',
                'message' => '',
                'default_value' => 1,
            ),
            array(
                'key' => 'field_53dfbedacaff9',
                'label' => 'Exibir Missão no menu?',
                'name' => 'op_menu_missao',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
                array (
                    'key' => 'field_53dfbedacaff5',
                    'label' => 'Missão',
                    'name' => 'missao_repeater',
                    'type' => 'repeater',
                    'sub_fields' => array (
                        array (
                            'key' => 'field_53dfbf5dcaff7',
                            'label' => 'Título',
                            'name' => 'missao_repeater_titulo',
                            'type' => 'text',
                            'column_width' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'formatting' => 'html',
                            'maxlength' => '',
                        ),
                        array (
                            'key' => 'field_53dfbf88caff8',
                            'label' => 'Descrição',
                            'name' => 'missao_repeater_descricao',
                            'type' => 'textarea',
                            'column_width' => '',
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => '',
                            'formatting' => 'br',
                        ),
                        array (
                            'key' => 'field_53dfbf03caff6',
                            'label' => 'Icone',
                            'name' => 'missao_repeater_icone',
                            'type' => 'image',
                            'column_width' => '',
                            'save_format' => 'id',
                            'preview_size' => 'thumbnail',
                            'library' => 'all',
                        ),
                    ),
                    'row_min' => 0,
                    'row_limit' => '',
                    'layout' => 'table',
                    'button_label' => 'Adicionar mais um campo',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'onepage',
                        'order_no' => 0,
                        'group_no' => 0,
                    ),
                    array(
                        'param' => 'post',
                        'operator' => '==',
                        'value' => $_missao->ID,
                        'order_no' => 1,
                        'group_no' => 0,
                    ),
                ),
            ),
            'options' => array (
                'position' => 'normal',
                'layout' => 'default',
                'hide_on_screen' => array (
                    0 => 'permalink',
                    1 => 'the_content',
                    2 => 'excerpt',
                    3 => 'custom_fields',
                    4 => 'discussion',
                    5 => 'comments',
                    6 => 'revisions',
                    7 => 'slug',
                    8 => 'author',
                    9 => 'format',
                    10 => 'featured_image',
                    11 => 'categories',
                    12 => 'tags',
                    13 => 'send-trackbacks',
                ),
            ),
            'menu_order' => 0,
        ));
    }
}
