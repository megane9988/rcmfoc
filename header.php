<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_nav_menu( array('menu' => 'primary menu' )); ?>
<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?> " />
