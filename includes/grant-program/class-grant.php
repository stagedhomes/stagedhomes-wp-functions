<?php
/**
 * Create Grant forms.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Stagedhomes_Wp_Functions
 * @subpackage Stagedhomes_Wp_Functions/includes/grant-program
 * @author     Duane Leem <duane@stagedhomes.com>
 */

if(!class_exists("Shc_Functions_GrantProgram")) {
  class Shc_Functions_GrantProgram {
    public function html_form_code($atts) {
      ob_start();
      include(plugin_dir_path( __FILE__ ) . "htmlform.inc.php");
      return ob_get_clean();
    } // html_form_code()
  } // Shc_Functions_GrantProgram
}
