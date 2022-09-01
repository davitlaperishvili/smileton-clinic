<html lang="ru" class="bx-core bx-no-touch bx-no-retina bx-chrome desktop landscape no-touch">
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png?v=3">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png?v=3">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png?v=3">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json?v=3">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg?v=3" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.ico?v=3">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/favicons/browserconfig.xml?v=3">
	<meta name="theme-color" content="#ffffff">
	<!-- favicons -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
?>


<!-- <?php
				wp_nav_menu([
					'theme_location'	=> 'header_menu',
					'menu'				=> 'header_menu', 
					'container'			=> 'nav',
					'container_class'	=> 'navigation',
					'menu_class'		=> 'navigation'
				]);
			?> -->
