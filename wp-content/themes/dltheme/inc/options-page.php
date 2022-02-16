<?php
/**
 * D.L CMB2 Metaboxes definitions
 *
 * @package D.L
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

$dl_cmb2_dir = get_template_directory() . '/inc/cmb2_options';

// Array of files to include
$dl_cmb2 = array(
	'/customize.php',
	'/front-page-options.php',
	'/services-page-options.php',
);

// Include files
foreach($dl_cmb2 as $file){
	require_once $dl_cmb2_dir . $file;
}