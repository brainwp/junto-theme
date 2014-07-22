<?php
/**
 * The template used for displaying the content of the Cases in home.php
 *
 * @package Junto Theme
 */
?>
<div id="cases" class="top-bg cases"></div>
<section class="col-md-12 cases">
	<header class="entry-header">
		<h2>Cases</h2>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="content-cases">
		
		<?php
			$cases = get_page_by_title('Cases', 'OBJECT', 'onepage');

			/* if ( ! empty( $cases ) ) :
	
				foreach ($cases as $case) {
					echo '<div class="col-md-2 each-logo">';
					echo '</div><!-- .each-logo -->';
				}

			*/ ?>
		
<div class="col-md-12 list_carousel">

        <?php
	        $args = array(
	            'post_type' => 'portfolio',
	            'posts_per_page' => 10,
	        );
        ?>

        <ul class="slider_cases">

            <?php
            $portfolio = new WP_Query( $args );
            while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>

                <li class="col-md-3 each-case">
                    <a href="<?php the_permalink(); ?>">

						<div class="img">
                        <?php
	                        if (has_post_thumbnail()) {
	                            $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium', true);
	                            echo '<img src="' . $thumb_url[0] . '"/>';
	                        } else {
	                            echo '<img src="' . get_bloginfo('template_url') . '/img/thumb-portfolio.png"/>';
	                        }
                        ?>
                        </div>
                        <div class="col-md-12 desc">
                            <?php the_title(); ?>
                        </div><!-- .desc -->
                    </a>

                </li><!-- .col-md-3 each-case -->

            <?php endwhile; ?>

        </ul>

    </div><!-- col-md-12 list_carousel slider_cases -->

    <div class="prev-slider" id="prev-case"></div>
    <div class="next-slider" id="next-case"></div>

    <div class="clear"></div>


			<?php /*
			endif;
	    	*/ ?>
		
		</div><!-- .content-cases -->

	</div><!-- .entry-content -->

	<footer class="entry-footer">
			<div class="col-md-3">
				<div class="icon download">
					<?php
						$icon_download = get_field('op_icone_download', $cases->ID);

						if ( empty( $icon_download ) ) {
							$icon_download = get_stylesheet_directory_uri() . '/img/icon-download-default.png';
						}
					?>
					<img src="<?php echo $icon_download; ?>" alt="<?php echo $desc_download; ?>">
				</div>
				<div class="description">
					Faça download do nosso portfólio completo
				</div><!-- description -->
			</div><!-- . -->
			<div class="col-md-3">
				<div class="icon orcamento">
					<?php
						$icon_orcamento = get_field('op_icone_orcamento', $cases->ID);

						if ( empty( $icon_orcamento ) ) {
							$icon_orcamento = get_stylesheet_directory_uri() . '/img/icon-orcamento-default.png';
						}
					?>
					<img src="<?php echo $icon_orcamento; ?>" alt="<?php echo $desc_orcamento; ?>">
				</div>
				<div class="description">
					Solicite um orçamento para suas demandas
				</div><!-- description -->
			</div><!-- . -->
			<div class="col-md-3 btn-all-cases">
				<a href="<?php echo home_url(); ?>/cases">Outros Cases</a>
			</div><!-- .btn-all-cases -->

	</footer><!-- .entry-footer -->

	<?php
    	unset( $cases );
    ?>

</section><!-- .cases -->
