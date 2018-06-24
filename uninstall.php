<?php
/**
 * Uninstall for WP-Accessible.
 *
 * @package wp-accessible
 */

if ( ! defined( 'ABSPATH' ) && ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

delete_option( 'widget_wpacc-latest-tweets' );
delete_option( 'wpacc_tdf_consumer_key' );
delete_option( 'wpacc_tdf_consumer_secret' );
delete_option( 'wpacc_tdf_access_token' );
delete_option( 'wpacc_tdf_access_token_secret' );
delete_option( 'wpacc_tdf_user_timeline' );
delete_option( 'wpacc_tdf_cache_expire' );


