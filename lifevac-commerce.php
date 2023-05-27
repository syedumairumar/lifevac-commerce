<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://interknow.com
 * @since             1.0.0
 * @package           Lifevac_Commerce
 *
 * @wordpress-plugin
 * Plugin Name:       LifeVac Commerce
 * Plugin URI:        https://lifevac.net
 * Description:       Integrates with LifeVac Shop
 * Version:           1.0.0
 * Author:            Interknow
 * Author URI:        https://interknow.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lifevac-commerce
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
define( 'LIFEVAC_COMMERCE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lifevac-commerce-activator.php
 */
function activate_lifevac_commerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lifevac-commerce-activator.php';
	Lifevac_Commerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lifevac-commerce-deactivator.php
 */
function deactivate_lifevac_commerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lifevac-commerce-deactivator.php';
	Lifevac_Commerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lifevac_commerce' );
register_deactivation_hook( __FILE__, 'deactivate_lifevac_commerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lifevac-commerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lifevac_commerce() {

	$plugin = new Lifevac_Commerce();
	$plugin->run();

}
run_lifevac_commerce();
