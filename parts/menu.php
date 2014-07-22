<?php
/**
 * The template used for displaying the menu in home.php
 *
 * @package Junto Theme
 */
?>

<span class="top" href="">Junto</span>

<?php
$mt = get_page_by_path('metodologia', OBJECT, 'onepage');
if ( get_field('op_exibir_metodologia', $mt->ID) ) : ?>
	<span class="menu-metodologia" href="">Metodologia</span>
<?php endif; ?>

<?php
$cs = get_page_by_title('Cases', 'OBJECT', 'onepage');
if ( get_field('op_exibir_menu_cases', $cs->ID) ) : ?>
	<span class="menu-cases" href="">Cases</span>
<?php endif; ?>

<?php
$c = get_page_by_title('Clientes', 'OBJECT', 'onepage');
if ( get_field('op_exibir_menu_clientes', $c->ID) ) : ?>
	<span class="menu-clientes" href="">Clientes</span>
<?php endif; ?>