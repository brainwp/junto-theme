<?php
/**
 * The template used for displaying the content of the Clientes in home.php
 *
 * @package Junto Theme
 */
?>
<div id="servicos"></div>
<section class="col-md-12 servicos" id="servicos_section">
	<header class="entry-header">
		<h2>O que fazemos?</h2>
		<span class="sub-title">[ Serviços ]</span>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php $s = get_option('servicos'); ?>
		<?php if (get_field('servicos_repeater', $s)) : ?>
            <?php while (has_sub_field('servicos_repeater', $s)): ?>
            <?php 
            	$icon = get_sub_field('servicos_repeater_icone');
            	$size = 'thumbnail'; 
            	$title = get_sub_field('servicos_repeater_titulo');
            	$desc = get_sub_field('servicos_repeater_descricao');
				
				echo "<div class='each col-md-4'>";

					if( $icon ) {
						echo "<div class='icon'>";
							echo wp_get_attachment_image( $icon, $size );						
						echo "</div>" ;
					}

					if( $desc ) {
						echo "<span class='desc'>";
							echo "<span class='title'>" . $title . "</span>";
							echo $desc;
						echo "</span>";
					}

				echo "</div>";

			?>

            <?php endwhile; ?>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edite a seção Serviçoes', 'junto-theme' ), '<span class="edit-link">', '</span>', $s ); ?>
	</footer><!-- .entry-footer -->
</section><!-- .servicos -->
<div class="bottom-bg servicos"></div>

<?php unset( $s ); ?>