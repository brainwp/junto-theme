<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Junto Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					Cases / Portfólio
				</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

                <li class="col-md-3 each-case">
                    <a href="<?php the_permalink(); ?>">

						<div class="img">
                        <?php
	                        if (has_post_thumbnail()) {
	                            $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'slider-publicacoes-image', true);
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

			<?php junto_theme_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
