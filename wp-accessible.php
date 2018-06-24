<?php
/**
 * Plugin Name: WP Accessible Twitter Feed.
 * Description: This plugin adds an accessible Twitter feed widget compliant with WCAG 2.
 *
 * Version: 2.0
 *
 * Author: Rian Rietveld
 * Author URI: http://rianrietveld.com
 * License: GPLv2 or later
 *
 * @package wp-accessible
 */

if ( ! defined( 'WPACC_URL' ) ) {
	define( 'WPACC_URL', plugin_dir_url( __FILE__ ) );
}
if ( ! defined( 'WPACC_PATH' ) ) {
	define( 'WPACC_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'WPACC_BASENAME' ) ) {
	define( 'WPACC_BASENAME', plugin_basename( __FILE__ ) );
}

define( 'WPACC_FILE', __FILE__ );

/**
 * Include language files.
*/
load_plugin_textdomain( 'wpacc', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

define( 'WPACC_VERSION', '2.0' );

/**
 * Load the Library
*/
require WPACC_PATH . 'lib/init.php';
