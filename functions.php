<?php
/**
 * Starter Genesis Child Theme.
 *
 * This file adds functions to the Starter Genesis Child Theme.
 *
 * @package Starter Genesis Child
 * @author  Tim Jensen
 * @license GPL-2.0+
 * @link    https://www.timjensen.us/
 */

namespace TimJensen\StarterGenesis;

// Start the engine
include_once( get_template_directory() . '/lib/init.php' );

// Set Localization (do not remove)
load_child_theme_textdomain( 'starter-genesis-child', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'starter-genesis-child' ) );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Starter Genesis Child Theme' );
define( 'CHILD_THEME_URL', 'https://www.timjensen.us/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

function autoload() {
	$files = array(
		'enqueue',
		'theme-supports',
		'setup-site-header',
		'setup-site-inner',
		'setup-site-footer'
	);

	foreach ( $files as $file ) {
		include_once( get_stylesheet_directory() . '/lib/' . $file . '.php' );
	}
}

autoload();