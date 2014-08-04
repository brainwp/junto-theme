<?php
/**
 * The template used for displaying the content of the Clientes in home.php
 *
 * @package Junto Theme
 */
?>
<div id="missao"></div>
<section class="col-md-12 missao">
	<header class="entry-header">
		<h2>O que nos move?</h2>
		<span class="sub-title">[ Missão ]</span>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			$m = get_option('missao');
	    ?>

		

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edite a seção Metodologia', 'junto-theme' ), '<span class="edit-link">', '</span>', $m ); ?>
	</footer><!-- .entry-footer -->
</section><!-- .metodologia -->
<div class="bottom-bg metodologia"></div>

<?php unset( $m ); ?>