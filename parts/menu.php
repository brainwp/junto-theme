<?php
/**
 * The template used for displaying the menu in home.php
 *
 * @package Junto Theme
 */
?>

<span class="top_menu top active" data-element="#junto"></span>

<?php
$mt = get_option('metodologia');
if ( get_field('op_exibir_metodologia', $mt) ) : ?>
	<span class="top_menu menu-metodologia" data-element="#metodologia">Metodologia</span>
<?php endif; ?>

<?php
$se = get_option('servicos');
if ( get_field('servicos_menu', $se) ) : ?>
	<span class="menu-servicos" data-element="#servicos_section">Serviços</span>
<?php endif; ?>

<?php
$mi = get_option('missao');
if ( get_field('op_menu_missao', $mi) ) : ?>
	<span class="menu-missao" data-element="#missao_section">Missão</span>
<?php endif; ?>

<?php
$cs = get_option('cases');
if ( get_field('op_exibir_menu_cases', $cs) ) : ?>
	<span class="top_menu menu-cases" data-element="#cases_section">Cases</span>
<?php endif; ?>

<?php
$c = get_option('clientes');
if ( get_field('op_exibir_menu_clientes', $c) ) : ?>
	<span class="top_menu menu-clientes" data-element="#clientes_section">Clientes</span>
<?php endif; ?>