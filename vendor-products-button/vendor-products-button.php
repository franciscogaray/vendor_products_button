<?php
/*
Plugin Name: Vendor Products Button
Description: This plugin inserts a button to edit products in My Account page for <strong>vendor</strong> users role.
Version: 1.0
Author: Francisco Garay
Author URI: http://franciscogaray.ga/
License GPLv2 or later
Text Domain: vendor-products-button
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists('franciscogaray_vendor_products_button') ) {
    function franciscogaray_vendor_products_button() {
        $user = wp_get_current_user();
        $roles = (array) $user->roles;
        if ( in_array( 'vendor', $roles ) ) {
           wp_enqueue_script( 'vendor-products-button', plugin_dir_url( __FILE__ ) . 'js/vendor-products-button.js' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'franciscogaray_vendor_products_button', 20, 1 );
}