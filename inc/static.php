<?php
/**
 * Static 
 * 
 */

function elementor_dev_enqueue_scripts() {
  wp_enqueue_style('elementor-adv-style', ELEMENTOR_ADV_URI . '/dist/frontend.elementor-adv.bundle.css', false, ELEMENTOR_ADV_VER);
  wp_enqueue_script('elementor-adv-script', ELEMENTOR_ADV_URI . '/dist/frontend.elementor-adv.bundle.js', ['jquery'], ELEMENTOR_ADV_VER, true);

  wp_localize_script('elementor-adv-script', 'ELEMENTOR_ADV_DATA', [
    'ajax_url' => admin_url('admin-ajax.php'),
  ]);
}

add_action('wp_enqueue_scripts', 'elementor_dev_enqueue_scripts', 30);