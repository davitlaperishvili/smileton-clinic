<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/remixicon.woff2" as="font" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/Roboto-Bold.ttf" as="font" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/Roboto-Regular.ttf" as="font" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/Roboto-Medium.ttf" as="font" crossorigin>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<!-- <script src="https://kit.fontawesome.com/990ba33bd4.js" crossorigin="anonymous"></script> -->
</head>
<body <?php body_class(); ?> >

<div class="resp_menu trans-no-all">
	<div class="resp_menu_toggle">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="resp_menu_ul"></div>
</div>
<header class="trans-all-4">
	<div class="container">
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
			</a>
		</div>
		<div class="header_menu">
			<?php
				wp_nav_menu([
					'theme_location'	=> 'header_menu',
					'menu'				=> 'header_menu', 
					'container'			=> 'nav',
					'container_class'	=> 'navigation',
					'menu_class'		=> 'navigation'
				]);
			?>
		</div>
	</div>
</header>