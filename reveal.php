<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/08/14
 * Time: 17:52
 */ ?>
<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

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
		
<?php endwhile; ?>
<?php endif; ?>