<?php
/**
 * D.L functions and definitions
 *
 * @package D.L
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

$dl_inc_dir = get_template_directory() . '/inc';

// Array of files to include
$dl_includes = array(
	'/setup.php',
	'/widgets.php',
	'/enqueue.php',
	'/menus.php',
);

// Include files
foreach($dl_includes as $file){
	require_once $dl_inc_dir . $file;
}

?>