<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Write
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( ! get_theme_mod( 'write_disable_responsive' ) ) : ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-wrapper">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'write' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-top">
			<div class="site-branding">
			<?php if ( get_theme_mod( 'write_logo' ) ) : ?>
				<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php write_logo(); ?></a></h1>
			<?php endif; ?>
			<?php if ( ! ( get_theme_mod( 'write_logo' ) && get_theme_mod( 'write_replace_blogname' ) ) ) :?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
			<?php if ( ! get_theme_mod( 'write_hide_blogdescription' ) ) : ?>
				<div class="site-description"><?php bloginfo( 'description' ); ?></div>
			<?php endif; ?>
			</div>
			<?php if ( ! get_theme_mod( 'write_hide_navigation' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="menu-toggle"><?php _e( 'Menu', 'write' ); ?></div>
				<div class="main-navigation-content">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<?php if ( ! get_theme_mod( 'write_hide_search' ) ) : ?>
					<?php get_search_form(); ?>
					<?php endif; ?>
				</div>
			</nav>
			<?php endif; ?>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<?php if ( is_home() && get_header_image() ) : ?>
		<div id="header-image" class="header-image">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</div><!-- #header-image -->
		<?php endif; ?>

		<?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ;
		if ( is_front_page() && '1' == $paged && get_theme_mod( 'write_home_text' ) ) : ?>
		<div class="home-text">
			<?php echo get_theme_mod( 'write_home_text' ); ?>
		</div>
		<?php endif; ?>
