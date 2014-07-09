<?php
/**
 * The template used for displaying the menu in home.php
 *
 * @package Junto Theme
 */
?>

<a class="top" href="#top">Junto</a>

<?php
$c = get_page_by_title('clientes', 'OBJECT', 'onepage');
if ( get_field('op_exibir_menu_clientes', $c->ID) ) : ?>
	<a class="menu-clientes" href="#clientes">Clientes</a>
<?php endif; ?>