<?php
/**
 * Plugin Name: WP Accessible Twitter Feed
 * Description: This plugin adds an accessible Twitter feed widget compiant with WCAG 2.
 *
 * Version: 1.1
 * Author: Rian Rietveld
 * Author URI: http://rianrietveld.com
 * License: GPLv2 or later
*/

/*  Copyright 2012 Rian Rietveld

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/**
 * @package Main
 */

if ( !defined('WPACC_URL') ) define( 'WPACC_URL', plugin_dir_url( __FILE__ ) );
if ( !defined('WPACC_PATH') ) define( 'WPACC_PATH', plugin_dir_path( __FILE__ ) );
if ( !defined('WPACC_BASENAME') ) define( 'WPACC_BASENAME', plugin_basename( __FILE__ ) );
define( 'WPACC_FILE', __FILE__ );

/** Include language files */
load_plugin_textdomain( 'wpacc', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

define( 'WPACC_VERSION', '1.1' );

/** Load the Library */
require WPACC_PATH.'lib/init.php';