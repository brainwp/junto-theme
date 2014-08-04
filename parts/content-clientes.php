<?php
/**
 * The template used for displaying the content of the Clientes in home.php
 *
 * @package Junto Theme
 */
?>
<div id="clientes" class="top-bg sclientes"></div>
<section class="col-md-12 clientes">
	<header class="entry-header">
		<h2>Clientes</h2>
		<span class="sub-title">[ Alguns clientes que já Juntamos ]</span>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="logos">
		
		<?php
			$c = get_page_by_title('clientes', 'OBJECT', 'onepage');
		    $c_qtd = get_field('op_quantidade_de_logos', 'option');

		    if ( empty( $c_qtd ) ) {
		    	$c_qtd = '20';
		    }

			if ( ! empty( $c ) ) :

				$c_logos = get_field( 'clientes_img_box', $c->ID );
				$c_logos = explode(',', $c_logos);
	
				foreach ($c_logos as $c_logo_id) {
					echo '<div class="col-md-2 each-logo">';	
					echo wp_get_attachment_image( $c_logo_id, 'full' );
					echo '</div><!-- .each-logo -->';
				}

			endif;
	    	?>
		
		</div><!-- .logos -->

	    <?php
	    	unset( $c );
	    ?>   

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Adicionar ou remover logos', 'junto-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</section><!-- .clientes -->
