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
	<?php 
		$arg1 = array (
			'theme_location'	=>	'top_header'
			);
		$arg2 = array (
			'theme_location'	=>	'cat_navigation'
			);
	 ?>
	<!-- Header Section -->
	<header id="header">
		<h1><?php bloginfo('title') ?></h1>
		<h3><?php bloginfo('description'); ?></h3>
		<div class="menu-pages">
			<nav>
				<?php wp_nav_menu($arg1); ?>
			</nav>
		</div>
	</header>

	<!-- Category Menu -->
	<div class="menu-category">
		<h4>Caregories</h4>
		<nav>
			<?php wp_nav_menu($arg2); ?>
		</nav>
	</div>

	<div class="content-area clearfix">
		<!-- Main content contains blog posts and etc. -->
		<div class="main-content">
			<main>