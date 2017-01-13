<?php
// Declare a namespace for the functions in this file.
namespace headlesswp;

/*===============================================================*/
/*== Operations that are performed when the theme is activated ==*/
/*===============================================================*/

function on_activation_setup() {
	// Disable pingbacks & trackbacks
	if (get_option('default_pingback_flag') !== false) {
		update_option('default_pingback_flag', 0);
	}
	if (get_option('default_ping_status') !== false) {
		update_option('default_ping_status', 0);
	}
}

/*====================================*/
/*== Remove unused admin menu items ==*/
/*====================================*/

function remove_admin_menus(){
  /**
   * By default we don't remove any admin menu items.
   * You need to select what you want to remove.
   * Example:
   * remove_menu_page( 'edit.php' ); // Removes Posts
   */
}
