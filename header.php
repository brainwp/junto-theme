<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Junto Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="home-menu">
	<div class= "container" >
		<?php get_template_part( 'parts/menu', 'menu' ); ?>
	</div><!-- container -->
</nav><!-- home-menu -->

<div id="top" class="container" >
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<?php get_template_part( 'parts/content', 'header' ); ?>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
