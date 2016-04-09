<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo('charset'); ?>>
	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="A simple theme for educational purposes.">
    <meta name="author" content="Hesan Aminiloo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri().'/imgs/brian_favicon.png'; ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Main Container contains all of the page content and it used for Responsiveness of the page. -->
<div class="container clearfix">
