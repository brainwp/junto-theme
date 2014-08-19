<?php
/**
 * The template used for displaying the content of the Clientes in home.php
 *
 * @package Junto Theme
 */
?>
<div id="metodologia"></div>
<section class="col-md-12 metodologia">
	<header class="entry-header">
		<h2>Como Fazemos?</h2>
		<span class="sub-title">[ Metodologia ]</span>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			$m = get_page_by_title('metodologia', 'OBJECT', 'onepage');

			if ( ! empty( $m ) ) :
				$m_each = array();
				$m_each['0'] = get_field( 'primeira_metodologia', $m->ID );
				$m_each['1'] = get_field( 'segunda_metodologia', $m->ID );
				$m_each['2'] = get_field( 'terceira_metodologia', $m->ID );
				$m_each['3'] = get_field( 'quarta_metodologia', $m->ID );

			endif;
	    ?>

		<div class="metodos">

			<div class="each">
				<span class="number um">1</span>
				<span class="title">
					<?php echo get_field( 'titulo_primeira_metodologia', $m->ID ) ?>
				</span>
				<span class="desc">
					<?php echo $m_each['0']; ?>
				</span>
			</div><!-- .each -->

			<div class="linha-vertical"></div>

			<div class="each">
				<span class="number dois">2</span>
				<span class="title">
					<?php echo get_field( 'titulo_segunda_metodologia', $m->ID ) ?>
				</span>
				<span class="desc">
					<?php echo $m_each['1']; ?>
				</span>
			</div><!-- .each -->

			<div class="linha-vertical"></div>

			<div class="each">
				<span class="number tres">3</span>
				<span class="title">
					<?php echo get_field( 'titulo_terceira_metodologia', $m->ID ) ?>
				</span>
				<span class="desc">
					<?php echo $m_each['2']; ?>
				</span>
			</div><!-- .each -->

			<div class="linha-vertical"></div>

			<div class="each">
				<span class="number quatro">4</span>
				<span class="title">
					<?php echo get_field( 'titulo_quarta_metodologia', $m->ID ) ?>
				</span>
				<span class="desc">
					<?php echo $m_each['3']; ?>
				</span>
			</div><!-- .each -->
		
		</div><!-- .metodos -->

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edite a seção Metodologia', 'junto-theme' ), '<span class="edit-link">', '</span>', $m->ID ); ?>
	</footer><!-- .entry-footer -->
</section><!-- .metodologia -->
<div class="bottom-bg metodologia"></div>

<?php unset( $m ); ?>