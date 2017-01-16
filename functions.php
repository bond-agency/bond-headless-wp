<?php
/*===============================*/
/*== Load theme specific code. ==*/
/*===============================*/

// If you remove this, the theme will break.
require_once( get_stylesheet_directory() . "/includes/theme-code.php" );

/*=======================*/
/*== Setup Headless WP ==*/
/*=======================*/

function setup_headlesswp() {
	// Hide admin menu items. Edit what to hide in theme code & uncomment here to enable. 
	// add_action('admin_menu', 'headlesswp\remove_admin_menus');

  // Tune a few WP settings automatically when the theme is activated.
  add_action("after_switch_theme", "headlesswp\on_activation_setup");
}

// Let's get this party started.
add_action('after_setup_theme', 'setup_headlesswp');
