<?php
/**
 * The template for displaying all single posts.
 *
 * @package Junto Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>

			<div class="col-md-3 logo">
				<img src="<?php the_field('portfolio_logo'); ?>" alt="<?php the_title(); ?>">
			</div><!-- logo -->

			<div class="col-md-9 description">
				<h1><?php the_title(); ?></h1>
				<span><?php the_field('portfolio_descricao_curta'); ?></span>
			</div><!-- description -->

			<div class="hr"></div>

			<div class="col-md-12 content">
				<?php the_content();?>
			</div><!-- content -->

			<?php junto_theme_post_nav(); ?>

		</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>