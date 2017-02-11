<?php
/**
 * Starter Genesis Child Theme.
 *
 * This file registers support for theme features to the Starter Genesis Child Theme.
 *
 * @package Starter Genesis Child Theme
 * @author  Tim Jensen
 * @license GPL-2.0+
 */

// Add HTML5 markup structure
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Add Accessibility support
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

// Add support for custom header
add_theme_support( 'custom-header', array(
	'width'           => 600,
	'height'          => 160,
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'flex-height'     => true,
) );

// Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

// Add support for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header',
	'site-tagline',
	'nav',
	'subnav',
	'home-featured',
	'site-inner',
	'footer-widgets',
	'footer'
) );

// Rename primary and secondary navigation menus
add_theme_support( 'genesis-menus' , array( 'primary' => __( 'After Header Menu', 'starter-genesis-child' ), 'secondary' => __( 'Footer Menu', 'starter-genesis-child' ) ) );
