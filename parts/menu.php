<?php
/**
 * The template used for displaying the menu in home.php
 *
 * @package Junto Theme
 */
?>

<a class="top" href="#top">Junto</a>

<?php if ( get_field('op_adicionar_clientes_menu', 'option') ) : ?>
	<a class="menu-clientes" href="#clientes">Clientes</a>
<?php endif; ?>