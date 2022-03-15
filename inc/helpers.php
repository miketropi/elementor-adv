<?php
/**
 * Helpers 
 * 
 */

/**
 * SVG Icon 
 * 
 * @param $name 
 * @return HTML 
 */
function elementor_adv_icon_svg($name) {
  $icons = require(__DIR__ . '/svg.php');
  if(isset($icons[$name])) {
    return $icons[$name];
  } else {
    return null;
  }
}

function elementor_adv_html_tag_options() {
  return apply_filters('elementor_adv/html_tag_options', [
    'h1'  => esc_html__('h1', 'elementor-adv'),
    'h2' => esc_html__('h2', 'elementor-adv'),
    'h3' => esc_html__('h3', 'elementor-adv'),
    'h4' => esc_html__('h4', 'elementor-adv'),
    'h5' => esc_html__('h5', 'elementor-adv'),
    'h6' => esc_html__('h6', 'elementor-adv'),
    'strong' => esc_html__('strong', 'elementor-adv'),
    'p' => esc_html__('p', 'elementor-adv'),
    'div' => esc_html__('div', 'elementor-adv'),
  ]);
}