<?php

/**
 * This class is responsible for loading the correct language file
 */

namespace WC_Print_Suite;

class i18n {

  /**
   * i18n constructor
   */
  public function __construct() {
    $this->load_plugin_textdomain();
  }

  /**
   *
   */
  public function load_plugin_textdomain() {
    $locale = apply_filters( 'plugin_locale', get_locale(), PLUGIN_NAME );
    load_textdomain( PLUGIN_NAME, WP_LANG_DIR . '/plugins/'. PLUGIN_NAME. '-' . $locale . '.mo' );
  }

}