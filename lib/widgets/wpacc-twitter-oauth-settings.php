<?php

// Add an option page
// Twitter Feed for Developers by Storm Consultancy (Liam Gladdy)

if (is_admin()) {
  add_action('admin_menu', 'wpacc_tdf_menu');
  add_action('admin_init', 'wpacc_tdf_register_settings');
}

function wpacc_tdf_menu() {
	add_options_page('Twitter Feed for Developers','Twitter Feed Auth','manage_options','wpacc_tdf_settings','wpacc_tdf_settings_output');
}

function wpacc_tdf_settings() {
	$tdf = array();
	$tdf[] = array('name'=>'wpacc_tdf_consumer_key','label'=>'Twitter Application Consumer Key');
	$tdf[] = array('name'=>'wpacc_tdf_consumer_secret','label'=>'Twitter Application Consumer Secret');
	$tdf[] = array('name'=>'wpacc_tdf_access_token','label'=>'Account Access Token');
	$tdf[] = array('name'=>'wpacc_tdf_access_token_secret','label'=>'Account Access Token Secret');
	$tdf[] = array('name'=>'wpacc_tdf_cache_expire','label'=>'Cache Duration (Default 3600)');
	$tdf[] = array('name'=>'wpacc_tdf_user_timeline','label'=>'Twitter Feed Screen Name*');
	return $tdf;
}

function wpacc_tdf_register_settings() {
	$settings = wpacc_tdf_settings();
	foreach($settings as $setting) {
		register_setting('wpacc_tdf_settings',$setting['name']);
	}
}


function wpacc_tdf_settings_output() {
	$settings = wpacc_tdf_settings();
	
	echo '<div class="wrap">';
	
		echo '<h2>oAuth Twitter Feed for Developers</h2>';
		
		echo '<p>Most of this configuration can found on the application overview page on the <a href="http://dev.twitter.com/apps">http://dev.twitter.com</a> website.</p>';
		echo '<p>When creating an application for this plugin, you don\'t need to set a callback location and you only need read access.</p>';
		echo '<p>You will need to generate an oAuth token once you\'ve created the application. The button for that is on the bottom of the application overview page.</p>';		
		echo '<hr />';
		
		echo '<form method="post" action="options.php">';
		
    settings_fields('wpacc_tdf_settings');
		
		echo '<fieldset>';
			foreach  ($settings as $setting ) {
					if ($setting['name'] == 'wpacc_tdf_user_timeline')
						continue;
						
					echo '<label for '.$setting['name'].' style="width: 250px; display: inline-block;">'.$setting['label'].'</label>';
					echo '<input type="text" style="width: 400px" name="'.$setting['name'].'" value="'.get_option($setting['name']).'" /><br />';
				
			}
		echo '</fieldset>';
		
		submit_button();
		
		echo '</form>';
		
		echo '<hr />';
		
		echo '<h3>Debug Information</h3>';
		$last_error = get_option('wpacc_tdf_last_error');
		if (empty($last_error)) $last_error = "None";
		echo 'Last Error: '.$last_error.'</p>';
	
	echo '</div>';
	
}