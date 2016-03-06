<?php

/**
 * Plugin Name:       WooCommerce Print Suite
 * Plugin URI:
 * Description:
 * Version:           0.0.1
 * Author:            <a href="https://github.com/kilbot">kilbot</a>
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-slm
 */

// project namespace
namespace WC_Print_Suite;

// Define plugin constants.
define( __NAMESPACE__ . '\VERSION', '0.0.1' );
define( __NAMESPACE__ . '\PLUGIN_NAME', 'wc-print-suite' );
define( __NAMESPACE__ . '\PLUGIN_FILE', plugin_basename( __FILE__ ) );
define( __NAMESPACE__ . '\PLUGIN_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( __NAMESPACE__ . '\PLUGIN_URL', trailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );

// autoloader
spl_autoload_register( __NAMESPACE__ . '\\autoload' );

function autoload( $cls ) {
  $cls = ltrim( $cls, '\\' );
  if( substr( $cls, 0, strlen( __NAMESPACE__ ) ) !== __NAMESPACE__ )
    return;

  // @todo: remove first WC_Print_Suite, convert _ to -, convert to lowercase
  $cls = str_replace( __NAMESPACE__, '', $cls );
  $path = PLUGIN_PATH . 'includes' . str_replace( '\\', DIRECTORY_SEPARATOR, strtolower( $cls ) ) . '.php';
  require_once( $path );
}

// activate plugin
new Activator( new Admin\Notices() );

// deactivate plugin
new Deactivator();