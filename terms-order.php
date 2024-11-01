<?php

/**
 * Plugin Name:       Terms Order
 * Plugin URI:        https://twinthemes.com/plugins/terms-order
 * Description:       A simple plugin to reorder categories and custom post taxonomies.
 * Version:           1.0.2
 * Author:            TwinThemes
 * Author URI:        https://twinthemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       terms-order
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define('TERMS_ORDER_VERSION', '1.0.2');
define('TTTO_PATH', plugin_dir_path(__FILE__));
define('TTTO_URL', plugins_url('/', __FILE__));
define('TTTO_ASSETS_PATH', TTTO_PATH . 'assets/');
define('TTTO_ASSETS_URL', TTTO_URL . 'assets/');

/**
 * Plugin Activation.
 * This action is documented in includes/class-terms-order-activator.php
 */
function activate_terms_order() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-terms-order-activator.php';
	Terms_Order_Activator::activate();
}

/**
 * Plugin Deactivation
 * This action is documented in includes/class-terms-order-deactivator.php
 */
function deactivate_terms_order() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-terms-order-deactivator.php';
	Terms_Order_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_terms_order' );
register_deactivation_hook( __FILE__, 'deactivate_terms_order' );

/**
 * Plugin Internationalization,
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-terms-order.php';

/**
 * Begins execution of the plugin.
 */
function run_terms_order() {

	$plugin = new Terms_Order();
	$plugin->run();

}
run_terms_order();
