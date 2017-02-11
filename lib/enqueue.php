<?php
/**
 * Starter Genesis Child Theme.
 *
 * This file adds the theme styles and scripts to the Starter Genesis Child Theme.
 *
 * @package Starter Genesis Child Theme
 * @author  Tim Jensen
 * @license GPL-2.0+
 */


add_action( 'wp_enqueue_scripts', 'starter_genesis_enqueue_scripts_styles' );

/**
 * Enqueue theme styles and scripts
 */
function starter_genesis_enqueue_scripts_styles() {

	wp_enqueue_style( 'starter-genesis-child-fonts', '//fonts.googleapis.com/css?family=Roboto:300,500,900', array(), CHILD_THEME_VERSION );

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( 'starter-genesis-child-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );

		$output = array(
			'mainMenu' => __( 'Header Menu', 'starter-genesis-child' ),
			'subMenu'  => __( 'Footer Menu', 'starter-genesis-child' ),
		);

	wp_localize_script( 'starter-genesis-child-responsive-menu', 'genesisSampleL10n', $output );

}
