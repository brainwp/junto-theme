<?php
/**
 * The template used for displaying the Header in home.php
 *
 * @package Junto Theme
 */
?>
<div id="junto"></div>
<section <?php body_class('col-md-12 header'); ?> id="junto_section">
	<div class="logo">

	<?php if (is_front_page()) : ?>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-junto.png" alt="Junto">
	<?php else : ?>
		<a href="<?php echo home_url(); ?>">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-junto.png" alt="Junto">
		</a>
	<?php endif; ?>
		
	</div>
</section><!-- .header -->
