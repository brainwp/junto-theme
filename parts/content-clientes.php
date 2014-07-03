<?php
/**
 * The template used for displaying the content of the Clientes in home.php
 *
 * @package Junto Theme
 */
?>

<div class="top-bg clientes"></div>
<section class="col-md-12 clientes">
	<header class="entry-header">
		<h2>Clientes</h2>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="logos">
		
		<?php
		    $c = '';
		    $c = get_page_by_title( 'Clientes' );
		    $c_attachments = get_attachment_link( $c->ID );
		    $c_qtd = get_field('op_quantidade_de_logos', 'option');

		    if ( empty( $c_qtd ) ) {
		    	$c_qtd = '20';
		    }
		?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
	    	$args = array(
	        	'post_type' => 'attachment',
	            'numberposts' => $c_qtd,
	            'post_status' => null,
	            'post_parent' => $c->ID,
	            'orderby' => 'date'
			);

			$c_attachments = get_posts( $args );
			if ( $c_attachments ) {
				foreach ( $c_attachments as $a ) {
				$i = wp_get_attachment( $a->ID );
				
				$a_attributes = wp_get_attachment_image_src( $a->ID, 'full' );
				$a_metadata = wp_get_attachment_metadata( $a->ID );
				echo '<div class="col-md-2 each-logo">';
				echo '<img src="' . $i['src'] . '" alt="' . $i['alt'] . '">';
				echo '<span>' . $i['title'] .'</span>';
				echo '</div><!-- .each-logo -->';
		  		}
			}
	    	endwhile;
	    	endif;
	    	?>
		
		</div><!-- .logos -->

	    <?php
	    	wp_reset_postdata();
	    	unset( $c );
	    ?>   

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Adicionar ou remover logos', 'junto-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</section><!-- .clientes -->
