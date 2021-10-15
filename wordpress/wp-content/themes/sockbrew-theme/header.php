<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sockbrew_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'a-custom-theme-for-sockbrew-design'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$a_custom_theme_for_sockbrew_design_description = get_bloginfo('description', 'display');
				if ($a_custom_theme_for_sockbrew_design_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $a_custom_theme_for_sockbrew_design_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'a-custom-theme-for-sockbrew-design'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
				<?php
	
				if (is_active_sidebar('custom-header-widget')) : ?>
					<span id="search-modal-open" class="dashicons dashicons-search"></span>
					<div id="header-widget-modal" class="chw-widget-area widget-area" role="complementary">
						<div id="header-widget-modal-content-wrapper">
							<span id="search-modal-close" class="dashicons dashicons-dismiss"></span>
							<div id="custom-search">
								<?php dynamic_sidebar('custom-header-widget'); ?>	
							</div>
						</div>
					</div>
	
				<?php endif; ?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->