<?php 
/**
* Plugin Name: Elementor Advanced
* Plugin URI: #
* Description: ...
* Version: 1.0.0
* Author: Mike
* Author URI: #Mike
* License: GPLv2 or later
* Text Domain: elementor-adv
*/

{
  /**
   * Define 
   */
  define('ELEMENTOR_ADV_VER', '1.0.0');
  define('ELEMENTOR_ADV_DIR', plugin_dir_path(__FILE__));
  define('ELEMENTOR_ADV_URI', plugin_dir_url(__FILE__));
}

{
  /**
   * Include
   */
  require(ELEMENTOR_ADV_DIR . '/inc/static.php');
  require(ELEMENTOR_ADV_DIR . '/inc/helpers.php');
  require(ELEMENTOR_ADV_DIR . '/inc/hooks.php');
  require(ELEMENTOR_ADV_DIR . '/inc/ajax.php');
  require(ELEMENTOR_ADV_DIR . '/inc/load-widgets.php');
}