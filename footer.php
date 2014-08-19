<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Junto Theme
 */
?>

		</div><!-- #content -->

			<footer id="colophon" class="site-footer col-sm-12" role="contentinfo">

				<div class="entry-content">
					<div class="col-sm-4">
						<div class="mini-logo"></div>
						<span class="endereco">
							Rua Arquiteto Jaime Fonseca Rodrigues, 428 - Praça Panamericana - São Paulo/SP
						</span>
						<span class="contatos">
							<div class="line">
								<span class="phone"></span><span>11 2222 2222</span><br>
							</div><!-- line -->
							<div class="line">
								<span class="email"></span><span>11 2222 2222</span>
							</div><!-- line -->
						</span>
						<span class="btn-contato">
							<div class="barra-esquerda"></div>
							<div class="barra-direita"></div>
								<span>Entre em Contato</span>
						</span>
					</div>
					<div class="col-sm-4 blog">
						<h2>Blog</h2>
						<?php
							$last_posts = wp_get_recent_posts( array( 'numberposts' => '1' ) );
							foreach( $last_posts as $last ){
								echo '<a class="title" href="' . get_permalink($last["ID"]) . '" title="Veja '.esc_attr($last["post_title"]).'" >' .   $last["post_title"].'</a>';
								echo resumo( $last["post_content"], 500 );
								echo '<br><a href="' . get_permalink($last["ID"]) . '" title="Look '.esc_attr($last["post_title"]).'" >Leia mais >></a>';
							}
						?>
					</div>
					<div class="col-sm-4">
						<?php if ( is_active_sidebar( 'newsletter_widget_area' ) ) : ?>
							<div id="newsletter_widget_area" class="newsletter_widget_area widget-area" role="complementary">
								<?php dynamic_sidebar( 'newsletter_widget_area' ); ?>
							</div><!-- #newsletter_widget_area -->
						<?php endif; ?>
					</div>
				</div><!-- entry-content -->

			</footer><!-- #colophon .col-md-12 -->

	</div><!-- #page -->
</div><!-- container -->

<?php wp_footer(); ?>

</body>
</html>
