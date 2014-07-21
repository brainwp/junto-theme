<?php
/**
 * The template used for displaying the content of the Clientes in home.php
 *
 * @package Junto Theme
 */
?>
<div id="metodologia" class="top-bg"></div>
<section class="col-md-12 metodologia">
	<header class="entry-header">
		<h2>Clientes</h2>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			$m = get_page_by_title('metodologia', 'OBJECT', 'onepage');

			if ( ! empty( $m ) ) :

				$m_1 = get_field( 'primeira_metodologia', $m->ID );
				$m_2 = get_field( 'segunda_metodologia', $m->ID );
				$m_3 = get_field( 'terceira_metodologia', $m->ID );
				$m_4 = get_field( 'quarta_metodologia', $m->ID );

			endif;
	    ?>

		<div class="metodos">

			<div class="each">
				<?php echo $m_1; ?>
			</div><!-- .each -->
			<div class="each">
				<?php echo $m_2; ?>
			</div><!-- .each -->
			<div class="each">
				<?php echo $m_3; ?>
			</div><!-- .each -->
			<div class="each">
				<?php echo $m_4; ?>
			</div><!-- .each -->
		
		</div><!-- .metodos -->

	    <?php
	    	unset( $m );
	    ?>   

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Adicionar ou remover logos', 'junto-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</section><!-- .metodologia -->
