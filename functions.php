<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Add Post Types
require_once('library/post-types.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

function eButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="email button" href="'.$link.'"><span>' . do_shortcode($content) . '</span></a>';
}
add_shortcode('emailbutton', 'eButton');

function cButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="email button" href="'.$link.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'cButton');

// // Add theme support
// add_filter( 'the_password_form', 'custom_password_form' );
// function custom_password_form() {
// 	global $post;
// 	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
// 	$o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">
// 	' . __( "This page is password protected. To view it please enter your password below:" ) . '
// 	<label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
// 	</form>
// 	';
// 	return $o;
// }
function the_title_trim($title) {
	$title = attribute_escape($title);
	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);
	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

?>
