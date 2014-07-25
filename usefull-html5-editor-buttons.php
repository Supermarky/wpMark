<?php
   /*
   Plugin Name: Usefull HTML Editor Buttons
   Plugin URI: http://publizieren-im-netz.de/usefull-editor-buttons
   Description: Simple extend text editor with 9 very usefull HTML 5 tags like small, H2, div, span ...
   Version: 1.2
   Author: Mark Max Henckel
   Author URI: http://publizieren-im-netz.de/
   License: GPL2
   
WISYG-Editor:
function enable_more_buttons($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'fontselect';
  $buttons[] = 'sup'; 
  
  // etc, etc... 
 
  return $buttons;
}
add_filter("mce_buttons", "enable_more_buttons");
*/
add_action('admin_print_scripts', 'usefull_quicktags');
function usefull_quicktags() {
	wp_enqueue_script(
		'usefull_quicktags',
		plugin_dir_url(__FILE__) . 'usefull-quicktags.js',
		array('quicktags')
	);
}


?>