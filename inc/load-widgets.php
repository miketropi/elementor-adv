<?php 
/**
 * Load widgets 
 */

if ( ! defined('ABSPATH') ) {
	exit; // Exit if accessed directly.
}

function elementor_adv_load_widgets($widgets_manager) {

  /** FAQ Widget */
	require_once( __DIR__ . '/widgets/faq-widget.php' );
	$widgets_manager->register( new \Elementor_ADV_FAQ_Widget() );

}
add_action( 'elementor/widgets/register', 'elementor_adv_load_widgets' );