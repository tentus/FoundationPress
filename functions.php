<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/

foreach( array(
	'cleanup',			// Various clean up functions
	'foundation',		// Required for Foundation to work properly
	'navigation',		// Register all navigation menus
	'menu-walker',		// Add menu walker
	'widget-areas',		// Create widget areas in sidebar and footer
	'entry-meta',		// Return entry meta information for posts
	'enqueue-scripts',	// Enqueue scripts
	'theme-support',	// Add theme support
) as $required_file) {
	require_once('library/' . $required_file . '.php');
}
?>
