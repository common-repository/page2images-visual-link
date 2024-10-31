<?php
/**
 * @package Page2images_Visual_Link
 * @version 1.0.0
 */

/*
 Plugin Name: Page2Images Visual Link
Plugin URI: http://wordpress.org/plugins/page2images_visual_link/
Description: This plugin allow you visualize links of your website by just one
click installation. When user move mouse over the text links, they will see a
preview picture of this link. By default, [only extra links] will have preview
thumbnails. You can change the setting in the JS files.

Author: SuzhouKada
Version: 1.0.0
Author URI: http://www.page2images.com/
*/

define('P2ITB_VERSION', '1.0.0');
define('P2ITB_PLUGIN_URL', plugin_dir_url( __FILE__ ));

function add_p2itb_js() {
	wp_enqueue_script(
		'p2i.thumbnails',
		plugins_url('/js/p2i.thumbnails.js', __FILE__),
		array(), '1.0.0', true
	);
}

add_action( 'wp_enqueue_scripts', 'add_p2itb_js');

function run_p2itb_js() {
	echo '<script type="text/javascript">
			window.onload=function() {
				p2iQuery().run("Free", false, false);
			};
		</script>';
}

add_action('wp_head', 'run_p2itb_js');

?>
