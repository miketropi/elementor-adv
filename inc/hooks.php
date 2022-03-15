<?php 
/**
 * Hooks 
 */

function elementor_adv_register_cats($elements_manager) {
  $elements_manager->add_category(
		'elementor-adv',
		[
			'title' => esc_html__('Elementor ADV', 'elementor-adv'),
			'icon' => 'fa fa-hand-peace-o',
		]
	);

  return $elements_manager;
}

add_action('elementor/elements/categories_registered', 'elementor_adv_register_cats');