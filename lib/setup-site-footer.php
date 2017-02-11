<?php
/**
 * Starter Genesis Child
 *
 * This file sets up the functionality in the site-footer container of the Starter Genesis Child Theme.
 *
 * @package Starter Genesis Child Theme
 * @author  Tim Jensen
 * @license GPL-2.0+
 */

// Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

add_filter( 'wp_nav_menu_args', 'starter_genesis_secondary_menu_args' );
/**
 * Reduce the secondary navigation menu to one level depth
 *
 * @param  [array]  $args
 * @return [array] $args
 */
function starter_genesis_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {

		return $args;

	}

	$args['depth'] = 1;

	return $args;

}

add_filter('genesis_footer_creds_text', 'starter_genesis_footer_creds_filter');
/**
 * Customize the footer credits text
 *
 * @param  [string] $creds
 * @return [string] $creds
 */
function starter_genesis_footer_creds_filter( $creds ) {

	$creds = '&copy; Copyright ' . date('Y') . ' &mdash; ' . get_bloginfo();

	return $creds;

}
