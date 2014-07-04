<?php

add_action( 'init', '_register_field_groups', 999 );
function _register_field_groups() {

	if( ! function_exists( 'register_field_group' ) )
		return false;

	/* Opções */
	/* One Page Home */

	$fields = array();

	$fields[] = array(
		'key' => 'field_53b5683b35237',
		'label' => 'Descrição',
		'name' => '',
		'type' => 'message',
		'message' => 'A seção Clientes apresenta um grid de logos. Para isso ela depende diretamente da página Clientes.
Adicione os logos, definidos aqui com a medida de 300x300px, nessa página Clientes e eles aparecerão automaticamente na seção Clientes.',
	);

	$fields[] =	array(
		'key' => 'field_53b54b8302ac7',
		'label' => 'Exibir seção Clientes',
		'name' => 'op_exibir_clientes',
		'type' => 'true_false',
		'instructions' => 'Marque essa opção caso queira exibir a seção Clientes.',
		'message' => '',
		'default_value' => 0,
	);

	$fields[] = array(
		'key' => 'field_53b5ab4b10b65',
		'label' => 'Adicionar item ao menu?',
		'name' => 'op_adicionar_clientes_menu',
		'type' => 'true_false',
		'instructions' => 'Marcando essa opção, o WordPress adicionará esse item ao menu.',
		'message' => '',
		'default_value' => 0,
	);

	$fields[] =	array(
		'key' => 'field_53b54c3102ac9',
		'label' => 'Exibir link para todos os Clientes',
		'name' => 'op_link_todos_os_clientes',
		'type' => 'true_false',
		'instructions' => 'Marque essa opção caso queira exibir um botão de "Ver todos os Clientes" na seção Clientes.',
		'message' => '',
		'default_value' => 0,
	);

	$fields[] = array(
		'key' => 'field_53b54c9702aca',
		'label' => 'Quantidade de logos',
		'name' => 'op_quantidade_de_logos',
		'type' => 'number',
		'instructions' => 'Marque quantos logos deseja apresentar nessa seção. Caso deixe em branco o valor padrão será 20 logos.',
		'default_value' => 20,
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'min' => '',
		'max' => '',
		'step' => '',
	);

	$fields[] = array(
		'key' => 'field_624d1d53741d5',
		'label' => 'Informações Gerais',
		'name' => '',
		'type' => 'tab',
		'instructions' => 'Opções gerais para o site',
	);

	$fields[] = array(
		'key' => 'field_53b554cfaad1e',
		'label' => 'Endereço',
		'name' => 'op_endereço',
		'type' => 'google_map',
		'instructions' => 'Adicione o endereço da empresa. Ele será exibido no rodapé do site e marcado em um Google Maps.',
		'center_lat' => '',
		'center_lng' => '',
		'zoom' => 14,
		'height' => 500,
	);

	$fields[] = array(
		'key' => 'field_53b5552baad1f',
		'label' => 'Telefone',
		'name' => 'op_telefone',
		'type' => 'number',
		'instructions' => 'Adicione o número de telefone principal para contato.',
		'default_value' => '',
		'placeholder' => '(00) 0000-0000',
		'prepend' => '',
		'append' => '',
		'min' => 10,
		'max' => 14,
		'step' => '',
	);

	$fields[] = array(
		'key' => 'field_53b555a0aad20',
		'label' => 'Telefone Secundário (opcional)',
		'name' => 'op_telefone_secundario',
		'type' => 'number',
		'instructions' => 'Adicione o número de telefone secundário para contato.',
		'default_value' => '',
		'placeholder' => '(00) 0000-0000',
		'prepend' => '',
		'append' => '',
		'min' => 10,
		'max' => 14,
		'step' => '',
	);

	register_field_group(array(
		'id' => 'acf_opcoes',
		'title' => 'Configurações do seu site',
		'fields' => $fields,
		'location' => array (
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array(
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array(
			),
		),
		'menu_order' => 0,
	));

}
