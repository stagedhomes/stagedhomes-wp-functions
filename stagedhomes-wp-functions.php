<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://duaneleem.com
 * @since             1.0.0
 * @package           Stagedhomes_Wp_Functions
 *
 * @wordpress-plugin
 * Plugin Name:       SHC WP Functions
 * Plugin URI:        https://duaneleem.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Duane Leem
 * Author URI:        https://duaneleem.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       stagedhomes-wp-functions
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
define( 'STAGEDHOMES_WP_FUNCTIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-stagedhomes-wp-functions-activator.php
 */
function activate_stagedhomes_wp_functions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-stagedhomes-wp-functions-activator.php';
	Stagedhomes_Wp_Functions_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-stagedhomes-wp-functions-deactivator.php
 */
function deactivate_stagedhomes_wp_functions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-stagedhomes-wp-functions-deactivator.php';
	Stagedhomes_Wp_Functions_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_stagedhomes_wp_functions' );
register_deactivation_hook( __FILE__, 'deactivate_stagedhomes_wp_functions' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-stagedhomes-wp-functions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_stagedhomes_wp_functions() {

	$plugin = new Stagedhomes_Wp_Functions();
	$plugin->run();

}
run_stagedhomes_wp_functions();
