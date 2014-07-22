<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Junto Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$metodologia = get_page_by_title('metodologia', 'OBJECT', 'onepage');
			if ( get_field('op_exibir_metodologia', $metodologia->ID) ) : ?>
				<?php get_template_part( 'parts/content', 'metodologia' ); ?>
			<?php endif; ?>

			<?php
			$cases = get_page_by_title('Cases', 'OBJECT', 'onepage');
			if ( get_field('op_exibir_cases', $cases->ID) ) : ?>
				<?php get_template_part( 'parts/content', 'cases' ); ?>
			<?php endif; ?>

			<?php
			$clientes = get_page_by_title('clientes', 'OBJECT', 'onepage');
			if ( get_field('op_exibir_clientes', $clientes->ID) ) : ?>
				<?php get_template_part( 'parts/content', 'clientes' ); ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>