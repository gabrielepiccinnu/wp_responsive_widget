<?php

function wubook_or_init() {

	if ( $_POST[ 'wb_lang' ] ) {
		unset( $_COOKIE[ 'wb_lang' ] );
		$lang = $_POST[ 'wb_lang' ];
		setcookie( "wb_lang", $lang, time() + ( 86400 * 30 ), "/" );
		load_textdomain( 'wubook_or', WP_PLUGIN_DIR . '/wp_responsive_widget/lang/wubook_or-' . $lang . '.mo' );
	} else {

		$lang = $_COOKIE[ 'wb_lang' ];

		if ( $lang == '' ) {
			load_textdomain( 'wubook_or', WP_PLUGIN_DIR . '/wp_responsive_widget/lang/wubook_or-en_US.mo' );
		} else {
			load_textdomain( 'wubook_or', WP_PLUGIN_DIR . '/wp_responsive_widget/lang/wubook_or-' . $lang . '.mo' );
		}

	}

}


?>
