<?php

function wb_or_menu() {

	add_menu_page(
		'WuBook OR > ',
		'WuBook OR',
		'manage_options',
		'wb_or_settings',
		'wb_or_settings',
		plugins_url( 'i/icon.png', __FILE__ ),
		10 );

}

function wb_or_scripts() {

	wp_enqueue_style( 'wb_or_css', plugins_url( 'css/admin.css', __FILE__ ) );

	wp_enqueue_script( 'wb_or_jmin', plugins_url( 'js/jquery.min.js', __FILE__ ) );

	wp_enqueue_script( 'wb_or_jui', plugins_url( 'js/jquery-ui.min.js', __FILE__ ) );

	wp_enqueue_script( 'wb_or_js', plugins_url( 'js/admin.js', __FILE__ ) );

}

function wb_or_active() {

	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, TRUE );
	curl_setopt( $ch, CURLOPT_VERBOSE, true);
	curl_setopt( $ch, CURLOPT_ENCODING, "gzip" );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_HEADER, false );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	curl_setopt( $ch, CURLOPT_URL, 'https://wubook.net/js/wblib.jgz' );
	curl_setopt( $ch, CURLOPT_REFERER, 'https://wubook.net/js/wblib.jgz' );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
	$wblib = curl_exec( $ch );
	curl_close( $ch );

	update_option( 'wubook_javascript', $wblib );

	$js = "bordercolor: '#108dbd',lang: '',buttoncolor: '#108dbd',failback_lang: 'en',wbgoogle: 1,bgcolor: '#ffffff',dcodeval: '',iconcolor: '#888888',textcolor: '#2c2c2c',default_nights: 3";

	update_option( 'wubook_or_widget', $js );

	wp_clear_scheduled_hook( 'wb_or_cache_js' );

	wp_schedule_event( time(), 'monthly', 'wb_or_cache_js' );

}

function wb_or_disable() {
	wp_clear_scheduled_hook( 'wb_or_cache_js' );
}

if ( defined( 'DOING_CRON' ) && DOING_CRON ) {
	add_action( 'wb_or_cache_js', 'wb_or_cache_update' );

	function wb_or_cache_update() {

		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, TRUE );
		curl_setopt( $ch, CURLOPT_VERBOSE, true);
		curl_setopt( $ch, CURLOPT_USERAGENT, 'WUBOOK WORDPRESS' );
		curl_setopt( $ch, CURLOPT_ENCODING, "gzip" );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_HEADER, false );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ch, CURLOPT_URL, 'https://wubook.net/js/wblib.jgz' );
		curl_setopt( $ch, CURLOPT_REFERER, 'https://wubook.net/js/wblib.jgz' );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
		$wblib = curl_exec( $ch );
		curl_close( $ch );
		
		update_option( 'wubook_javascript', $wblib );

	}

}

?>