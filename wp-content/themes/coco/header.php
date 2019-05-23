<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package COCO
 */

?>
<!doctype html>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<!-- Wrapper -->
				<div id="wrapper">
					<!-- Main -->
						<div id="main">
							<div class="inner">
								<!-- Header -->
									<header id="header">
										<a href="index.html" class="logo"><strong>Editorial</strong> by HTML5 UP</a>
										<div role="navigation" class="inactive" id="sidebar">
											<div class="inner">
												<section id="search" class="alt">
													<?php get_search_form(); ?>
												</section>
												<nav id="menu">
													<header class="major">
														<h2>Menu</h2>
													</header>
													<?php wp_nav_menu(array('theme-location' => 'primary', 'menu_id' => 'primary_menu') ); ?>
												</nav>
												<section>
													<?php get_sidebar() ?>
												</section>
											</div>
										</div>
									</header>
	<div id="content" class="site-content">
