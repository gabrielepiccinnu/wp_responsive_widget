<?php

/**
 * Plugin Name: WuBook widget ( Online Reception )
 * Plugin URI: https://github.com/wubook/wp_responsive_widget
 * Description: WuBook widget is a tool for pre-ordering hotels directly on your website
 * Version: 1.0
 * Author: WuBook
 * Author URI: http://wubook.net/
 */

if ( !defined( "WPINC" ) ) { die( "WuBook" ); }

function wb_or_($file){ require_once WP_PLUGIN_DIR . '/wp_responsive_widget-master/' . $file; }

add_action( 'plugins_loaded', 'wubook_or_init' );
add_action( 'admin_menu', 'wb_or_menu' );
add_action( 'admin_enqueue_scripts', 'wb_or_scripts' );

add_shortcode( 'wubook_or', 'wb_or_shortcode' );

register_activation_hook( __FILE__, 'wb_or_active' );
register_deactivation_hook( __FILE__, 'wb_or_disable' );

wb_or_('lang.php');
wb_or_('admin.php');
wb_or_('front.php');
wb_or_('class.php');
wb_or_('func.php');

?>
