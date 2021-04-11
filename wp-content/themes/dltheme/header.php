<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scripts/swiper/swiper.css">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<!-- <script src="https://kit.fontawesome.com/990ba33bd4.js" crossorigin="anonymous"></script> -->
</head>
<body>

<?php if(is_active_sidebar('header_widget')): ?>
	<?php dynamic_sidebar('header_widget'); ?>
<?php endif; ?>

<?php
	wp_nav_menu([
		'theme_location'	=> 'header_menu',
		'menu'				=> 'header_menu', 
		'container'			=> 'nav',
		'container_class'	=> 'navigation',
		'menu_class'		=> 'nav'
	]);
?>