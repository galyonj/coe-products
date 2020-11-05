<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/galyonj
 * @since             1.0.0
 * @package           Coe_Products
 *
 * @wordpress-plugin
 * Plugin Name:       COE Products DAM
 * Plugin URI:        https://github.com/galyonj/coe-products-dam
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            John Galyon
 * Author URI:        https://github.com/galyonj
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       coe-products
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'COE_PRODUCTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-coe-products-activator.php
 */
function activate_coe_products() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-coe-products-activator.php';
	Coe_Products_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-coe-products-deactivator.php
 */
function deactivate_coe_products() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-coe-products-deactivator.php';
	Coe_Products_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_coe_products' );
register_deactivation_hook( __FILE__, 'deactivate_coe_products' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-coe-products.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_coe_products() {

	$plugin = new Coe_Products();
	$plugin->run();

}
run_coe_products();
