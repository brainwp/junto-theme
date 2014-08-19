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

		<?php if ( has_post_thumbnail() ) { ?>
		<?php $the_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'full' ); ?>
			<div class="col-md-3 logo">
				<img src="<?php echo $the_thumb[0]; ?>" width="<?php echo $the_thumb[1]; ?>" height="<?php echo $the_thumb[2]; ?>">
			</div><!-- logo -->
		<?php } ?>

		<div class="col-md-9 description">
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		</div>
		
<?php endwhile; ?>
<?php endif; ?>