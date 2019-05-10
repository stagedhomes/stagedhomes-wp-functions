<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://duaneleem.com
 * @since      1.0.0
 *
 * @package    Stagedhomes_Wp_Functions
 * @subpackage Stagedhomes_Wp_Functions/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Stagedhomes_Wp_Functions
 * @subpackage Stagedhomes_Wp_Functions/includes
 * @author     Duane Leem <duane@stagedhomes.com>
 */
class Stagedhomes_Wp_Functions_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'stagedhomes-wp-functions',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
