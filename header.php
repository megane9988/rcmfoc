<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<header class="siteHeader">
		<h1 class="siteTitle"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="navToggle" id="navToggle"><span class="line"></span><span class="line"></span><span class="line"></span></div>
		<div id="siteNav" class="siteNav cf"><?php wp_nav_menu( array('theme_location'  => 'primary' )); ?></div>
		<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?> " />
	</header>