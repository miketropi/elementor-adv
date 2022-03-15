<?php
/**
 * FAQ Widget 
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Elementor_ADV_FAQ_Widget extends \Elementor\Widget_Base {

  public function get_name() {
		return __('faq-with-search', 'elementor-adv');
	}

  public function get_title() {
		return esc_html__('FAQ with Search', 'elementor-adv');
	}

  public function get_icon() {
		return 'eicon-help';
	}

  public function get_custom_help_url() {
		return '';
	}

  public function get_categories() {
		return ['general', 'elementor-adv'];
	}

  public function get_keywords() {
		return ['faq'];
	}

  protected function register_controls() {
    $this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__('FAQ', 'elementor-adv'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

    # Heading text
    $this->add_control(
			'heading_text',
			[
				'label' => esc_html__('Heading Text', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__('Enter FAQ heading text', 'elementor-adv'),
        'default' => esc_html__('Frequently asked questions', 'elemetor-adv'),
        'label_block' => true,
			]
		);

    # Data repeaters
    $this->add_control(
			'faq_items',
			[
				'label' => esc_html__('FAQ Items', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'question',
						'label' => esc_html__('Answer & Question', 'elementor-adv'),
						'type' => \Elementor\Controls_Manager::TEXT,
						'placeholder' => esc_html__('Enter your answer', 'elementor-adv'),
            'default' => '',
            'label_block' => true,
            'dynamic' => [
              'active' => true,
            ],
					],
					[
						'name' => 'answer',
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'placeholder' => esc_html__('Enter your question', 'elementor-adv'),
            'default' => ''
					],
				],
				'default' => [
					[
						'question' => esc_html__('Question Item #1', 'elementor-adv'),
						'answer' => __('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.', 'elementor-adv'),
					],
					[
						'question' => esc_html__('Question Item #2', 'elementor-adv'),
						'answer' => __('Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.', 'elementor-adv'),
					],
				],
				'title_field' => '{{{ question }}}',
			]
		);

    $this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

    $this->add_control(
			'enable_seach_string',
			[
				'label' => esc_html__('Search String', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Yes', 'elementor-adv'),
				'label_off' => esc_html__('No', 'elementor-adv'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

    $this->add_control(
			'open_first_item',
			[
				'label' => esc_html__('Open First Item', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('Yes', 'elementor-adv'),
				'label_off' => esc_html__('No', 'elementor-adv'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

    $this->add_control(
			'hr1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

    $this->add_control(
			'heading_html_tag',
			[
				'label' => esc_html__('Heading HTML Tag', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => elementor_adv_html_tag_options(),
        'default' => 'h4',
			]
		);

    $this->add_control(
			'question_html_tag',
			[
				'label' => esc_html__('Question HTML Tag', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => elementor_adv_html_tag_options(),
        'default' => 'strong',
			]
		);

    $this->end_controls_section();

    $this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__('Heading Text', 'elementor-adv'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

    $this->add_control(
			'heading_text_color',
			[
				'label' => esc_html__('Heading Text Color', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-adv__widget-faq-heading-text' => 'color: {{VALUE}}',
				],
			]
		);
    
    $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_text_typography',
				'selector' => '{{WRAPPER}} .elementor-adv__widget-faq-heading-text',
			]
		);

    $this->end_controls_section();

    $this->start_controls_section(
			'faq_section',
			[
				'label' => esc_html__( 'FAQ', 'elementor-adv' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

    $this->add_control(
			'question_color',
			[
				'label' => esc_html__('Question Color', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-adv__widget-faq-item-question' => 'color: {{VALUE}}',
				],
			]
		);

    $this->add_control(
			'question_active_color',
			[
				'label' => esc_html__('Question Active Color', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-adv__widget-faq-item.__show .elementor-adv__widget-faq-item-question' => 'color: {{VALUE}}',
				],
			]
		);
    
    $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'question_typography',
				'selector' => '{{WRAPPER}} .elementor-adv__widget-faq-item-question',
			]
		);

    $this->add_control(
			'hr2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

    $this->add_control(
			'answer_color',
			[
				'label' => esc_html__('Answer Color', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-adv__widget-faq-item-answer' => 'color: {{VALUE}}',
				],
			]
		);
    
    $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'answer_typography',
				'selector' => '{{WRAPPER}} .elementor-adv__widget-faq-item-answer',
			]
		);

    $this->add_control(
			'hr3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

    $this->add_control(
			'border_color',
			[
				'label' => esc_html__('Border Color', 'elementor-adv'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-adv__widget-faq-item' => 'border-bottom-color: {{VALUE}}',
				],
			]
		);

    $this->end_controls_section();
    
  }

  protected function render() {
    $settings = $this->get_settings_for_display();
    ob_start();
    // print_r($settings);
    echo ob_get_clean();
  }

  protected function content_template() {
    ?>
    <#
    html_tag = <?php echo json_encode(elementor_adv_html_tag_options()); ?>;
    view.addRenderAttribute('faq_with_search', 'class', 'elementor-adv__widget elementor-adv__widget-faq');
    view.addRenderAttribute('heading_text', 'class', 'elementor-adv__widget-faq-heading-text');
    view.addInlineEditingAttributes('heading_text', 'none');
    #>
    <div {{{ view.getRenderAttributeString('faq_with_search') }}}>
      <div class="elementor-adv__widget-faq-entry">
        <div class="elementor-adv__widget-faq-header">
          <# if(settings.heading_text) { #>
          <{{{ html_tag[settings.heading_html_tag] }}} {{{ view.getRenderAttributeString('heading_text') }}}>
            {{{ settings.heading_text }}}
          </{{{ html_tag[settings.heading_html_tag] }}}>
          <# } #>

          <# if(settings.enable_seach_string == 'yes') { #>
          <div class="elementor-adv__widget-faq-search">
            <input type="text" placeholder="<?php _e('Looing for somethings?', 'elementor-adv') ?>"/>
            <a class="__icon-search"><?php echo elementor_adv_icon_svg('search'); ?></a>
          </div>
          <# } #>
        </div>
        <div class="elementor-adv__widget-faq-items">
          <#
          _.each(settings.faq_items, (item, index) => {
            var answer_setting_key = view.getRepeaterSettingKey('answer', 'faq_items', index);
            view.addInlineEditingAttributes(answer_setting_key, 'advanced');

            var repeater_setting_key = view.getRepeaterSettingKey('question', 'faq_items', index);
            view.addInlineEditingAttributes(repeater_setting_key, 'none');

            var classShowFirstItem = (index == 0 && settings.open_first_item == 'yes') ? '__show' : '';
          #>
            <div class="elementor-adv__widget-faq-item {{{ classShowFirstItem }}}">
              <# if(item.answer) { #>
              <div 
                class="elementor-adv__widget-faq-item-question"
                onClick="(function(e) {
                  let classes = e.target.parentElement.classList;
                  console.log(classes);
                  if([...classes].includes('__show')) {
                    e.target.parentElement.classList.remove('__show');
                  } else {
                    e.target.parentElement.classList.add('__show');
                  }
                })(arguments[0]); return false;" >
                <{{{ html_tag[settings.question_html_tag] }}} {{{ view.getRenderAttributeString(repeater_setting_key) }}}>
                  {{{ item.question }}}
                </{{{ html_tag[settings.question_html_tag] }}}>
                <span class="__icon-toggle">
                  <?php echo elementor_adv_icon_svg('arrow-down'); ?>
                </span>
              </div>
              <div class="elementor-adv__widget-faq-item-answer" >
                <div {{{ view.getRenderAttributeString(answer_setting_key) }}}>{{{ item.answer }}}</div>
              </div>
              <# } #>
            </div>
          <# }); #>
        </div>
      </div>
    </div>
    <?php 
  }
}