<?php

/**
 * This class is responsible for the WP Admin menu
 */

namespace WC_Print_Suite\Admin;

class Menu {

  /**
   * Notices constructor
   */
  public function __construct () {
    add_action( 'admin_menu', array( $this, 'admin_menu' ) );
  }

  /**
   *
   */
  function admin_menu () {
    add_submenu_page(
      'woocommerce',
      __( 'Templates', 'wc-print-suite' ),
      __( 'Templates', 'wc-print-suite' ),
      'manage_options',
      'edit.php?post_type=wc-print-template'
    );
  }

}