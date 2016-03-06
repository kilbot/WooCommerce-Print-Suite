<?php

/**
 * This class is responsible for custom post types
 */

namespace WC_Print_Suite;

class CPT {

  /**
   * CPT constructor
   */
  public function __construct() {
    $this->init();
  }

  /**
   *
   */
  function init() {
    $labels = array(
      'name'               => __( 'Print Templates', 'wc-print-suite' ),
      'singular_name'      => __( 'Print Template', 'wc-print-suite' ),
      'menu_name'          => __( 'Templates', 'wc-print-suite' ),
      'name_admin_bar'     => __( 'Template', 'wc-print-suite' ),
      'add_new'            => __( 'Add New', 'book', 'wc-print-suite' ),
      'add_new_item'       => __( 'Add New Template', 'wc-print-suite' ),
      'new_item'           => __( 'New Template', 'wc-print-suite' ),
      'edit_item'          => __( 'Edit Template', 'wc-print-suite' ),
      'view_item'          => __( 'View Template', 'wc-print-suite' ),
      'all_items'          => __( 'All Templates', 'wc-print-suite' ),
      'search_items'       => __( 'Search Templates', 'wc-print-suite' ),
      'parent_item_colon'  => __( 'Parent Template:', 'wc-print-suite' ),
      'not_found'          => __( 'No templates found.', 'wc-print-suite' ),
      'not_found_in_trash' => __( 'No templates found in Trash.', 'wc-print-suite' )
    );

    $args = array(
      'labels'             => $labels,
      'description'        => __( 'WooCommerce print templates.', 'wc-print-suite' ),
      'public'             => false,
      'publicly_queryable' => false,
      'show_ui'            => true,
      'show_in_menu'       => false,
      'query_var'          => false,
      'rewrite'            => false,
      'capability_type'    => 'page',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor' )
    );

    register_post_type( 'wc-print-template', $args );
  }

}