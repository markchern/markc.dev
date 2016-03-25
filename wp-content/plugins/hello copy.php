<?php

/*
Plugin Name: Custom Menu 
Plugin URI: http://dauid.us/
Description: This plugin creates a custom menu area for the currecntly active theme.
Author: Mark
Version: 1.6
Author URI: http://dauid.us/
*/

// register new custom menu
function register_mark_menu() {
	register_nav_menus( array (
		'custom-menu' => 'Custom Menu Area',
		) );
}
add_action('init', 'register_mark_menu' );

