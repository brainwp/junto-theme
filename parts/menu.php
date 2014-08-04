<?php
/**
 * The template used for displaying the menu in home.php
 *
 * @package Junto Theme
 */
?>

<span class="top" href=""></span>

<?php
$mt = get_option('metodologia');
if ( get_field('op_exibir_metodologia', $mt) ) : ?>
	<span class="menu-metodologia" href="">Metodologia</span>
<?php endif; ?>

<?php
$cs = get_option('cases');
if ( get_field('op_exibir_menu_cases', $cs) ) : ?>
	<span class="menu-cases" href="">Cases</span>
<?php endif; ?>

<?php
$c = get_option('clientes');
if ( get_field('op_exibir_menu_clientes', $c) ) : ?>
	<span class="menu-clientes" href="">Clientes</span>
<?php endif; ?>