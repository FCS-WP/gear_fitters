<?php
namespace Novaworks_Element\Widgets;

if (!defined('WPINC')) {
    die;
}

// Elementor Classes

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

/**
 * AnimatedBox Widget
 */
class Animated_Box extends NOVA_Widget_Base {

	public function get_style_depends() {
		return [
			'novaworks-animated-box-elm'
		];
	}

	public function get_script_depends() {
		return [
			'novaworks-animated-box-elm'
		];
	}

    public function get_name() {
        return 'novaworks-animated-box';
    }

    protected function get_widget_title() {
        return esc_html__( 'Animated Box', 'novaworks' );
    }

    public function get_icon() {
        return 'nova-elements-icon-11';
    }


    protected function register_controls() {

        $css_scheme = apply_filters(
            'NovaworksElement/animated-box/css-scheme',
            array(
                'animated_box'                => '.novaworks-animated-box',
                'animated_box_inner'          => '.novaworks-animated-box__inner',
                'animated_box_front'          => '.novaworks-animated-box__front',
                'animated_box_back'           => '.novaworks-animated-box__back',
                'animated_box_icon'           => '.novaworks-animated-box__icon',
                'animated_box_icon_box'       => '.novaworks-animated-box__icon-box',
                'animated_box_title'          => '.novaworks-animated-box__title',
                'animated_box_subtitle'       => '.novaworks-animated-box__subtitle',
                'animated_box_description'    => '.novaworks-animated-box__description',
                'animated_box_button'         => '.novaworks-animated-box__button',
                'animated_box_button_icon'    => '.novaworks-animated-box__button-icon',
                'animated_box_icon_front'     => '.novaworks-animated-box__icon--front',
                'animated_box_icon_back'      => '.novaworks-animated-box__icon--back',
                'animated_box_title_front'    => '.novaworks-animated-box__title--front',
                'animated_box_title_back'     => '.novaworks-animated-box__title--back',
                'animated_box_subtitle_front' => '.novaworks-animated-box__subtitle--front',
                'animated_box_subtitle_back'  => '.novaworks-animated-box__subtitle--back',
                'animated_box_desc_front'     => '.novaworks-animated-box__description--front',
                'animated_box_desc_back'      => '.novaworks-animated-box__description--back',
            )
        );

        $this->start_controls_section(
            'section_front_content',
            array(
                'label' => esc_html__( 'Front Side Content', 'novaworks' ),
            )
        );

	    $this->add_control(
		    'front_side_icon',
		    [
			    'label' => __( 'Icon', 'novaworks' ),
			    'type' => Controls_Manager::ICONS,
			    'fa4compatibility' => 'icon'
		    ]
	    );

        $this->add_control(
            'front_side_title',
            array(
                'label'   => esc_html__( 'Title', 'novaworks' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Title', 'novaworks' ),
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->add_control(
            'front_side_subtitle',
            array(
                'label'   => esc_html__( 'Subtitle', 'novaworks' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Flip Box', 'novaworks' ),
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->add_control(
            'front_side_description',
            array(
                'label'   => esc_html__( 'Description', 'novaworks' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Easily add or remove any text on your flip box!', 'novaworks' ),
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_back_content',
            array(
                'label' => esc_html__( 'Back Side Content', 'novaworks' ),
            )
        );

	    $this->add_control(
		    'back_side_icon',
		    [
			    'label' => __( 'Icon', 'novaworks' ),
			    'type' => Controls_Manager::ICONS,
			    'fa4compatibility' => 'icon'
		    ]
	    );

        $this->add_control(
            'back_side_title',
            array(
                'label'   => esc_html__( 'Title', 'novaworks' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Back Side', 'novaworks' ),
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->add_control(
            'back_side_subtitle',
            array(
                'label'   => esc_html__( 'Subtitle', 'novaworks' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '',
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->add_control(
            'back_side_description',
            array(
                'label'   => esc_html__( 'Description', 'novaworks' ),
                'type'    => Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Easily add or remove any text on your flip box!', 'novaworks' ),
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->add_control(
            'back_side_button_text',
            array(
                'label'   => esc_html__( 'Button text', 'novaworks' ),
                'type'    => Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'novaworks' ),
            )
        );

        $this->add_control(
            'back_side_button_link',
            array(
                'label'       => esc_html__( 'Button Link', 'novaworks' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => 'http://your-link.com',
                'default' => array(
                    'url' => '#',
                ),
                'dynamic' => array( 'active' => true ),
            )
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_settings',
            array(
                'label' => esc_html__( 'Settings', 'novaworks' ),
            )
        );

        $this->add_control(
            'animation_effect',
            array(
                'label'   => esc_html__( 'Animation Effect', 'novaworks' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'novaworks-box-effect-1',
                'options' => array(
                    'novaworks-box-effect-1'  => esc_html__( 'Flip Horizontal', 'novaworks' ),
                    'novaworks-box-effect-2'  => esc_html__( 'Flip Vertical', 'novaworks' ),
                    'novaworks-box-effect-3'  => esc_html__( 'Fall Up', 'novaworks' ),
                    'novaworks-box-effect-4'  => esc_html__( 'Fall Right', 'novaworks' ),
                    'novaworks-box-effect-5'  => esc_html__( 'Slide Down', 'novaworks' ),
                    'novaworks-box-effect-6'  => esc_html__( 'Slide Right', 'novaworks' ),
                    'novaworks-box-effect-7'  => esc_html__( 'Flip Horizontal 3D', 'novaworks' ),
                    'novaworks-box-effect-8'  => esc_html__( 'Flip Vertical 3D', 'novaworks' ),
                ),
            )
        );

        $this->add_control(
            'title_html_tag',
            array(
                'label'   => esc_html__( 'Title HTML Tag', 'novaworks' ),
                'type'    => Controls_Manager::SELECT,
                'options' => array(
                    'h1'   => esc_html__( 'H1', 'novaworks' ),
                    'h2'   => esc_html__( 'H2', 'novaworks' ),
                    'h3'   => esc_html__( 'H3', 'novaworks' ),
                    'h4'   => esc_html__( 'H4', 'novaworks' ),
                    'h5'   => esc_html__( 'H5', 'novaworks' ),
                    'h6'   => esc_html__( 'H6', 'novaworks' ),
                    'div'  => esc_html__( 'div', 'novaworks' ),
                    'span' => esc_html__( 'span', 'novaworks' ),
                    'p'    => esc_html__( 'p', 'novaworks' ),
                ),
                'default' => 'h3',
            )
        );

        $this->add_control(
            'sub_title_html_tag',
            array(
                'label'   => esc_html__( 'Subtitle HTML Tag', 'novaworks' ),
                'type'    => Controls_Manager::SELECT,
                'options' => array(
                    'h1'   => esc_html__( 'H1', 'novaworks' ),
                    'h2'   => esc_html__( 'H2', 'novaworks' ),
                    'h3'   => esc_html__( 'H3', 'novaworks' ),
                    'h4'   => esc_html__( 'H4', 'novaworks' ),
                    'h5'   => esc_html__( 'H5', 'novaworks' ),
                    'h6'   => esc_html__( 'H6', 'novaworks' ),
                    'div'  => esc_html__( 'div', 'novaworks' ),
                    'span' => esc_html__( 'span', 'novaworks' ),
                    'p'    => esc_html__( 'p', 'novaworks' ),
                ),
                'default' => 'h4',
            )
        );

        $this->end_controls_section();

        /**
         * General Style Section
         */
        $this->start_controls_section(
            'section_animated_box_general_style',
            array(
                'label'      => esc_html__( 'General', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->add_responsive_control(
            'box_height',
            array(
                'label' => esc_html__( 'Height', 'novaworks' ),
                'type'  => Controls_Manager::SLIDER,
                'range' => array(
                    'px' => array(
                        'min' => 100,
                        'max' => 1000,
                    ),
                ),
                'default' => [
                    'size' => 245,
                ],
                'selectors' => array(
                    '{{WRAPPER}} '.$css_scheme['animated_box'] => 'height: {{SIZE}}{{UNIT}};',
                ),
            )
        );

        $this->start_controls_tabs( 'general_style_tabs' );

        $this->start_controls_tab(
            'tab_front_general_styles',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            array(
                'name'     => 'front_side_background',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_front'],
            )
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            array(
                'name'        => 'front_border',
                'label'       => esc_html__( 'Border', 'novaworks' ),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'  => '{{WRAPPER}} ' . $css_scheme['animated_box_front'],
            )
        );

        $this->add_responsive_control(
            'front_border_radius',
            array(
                'label'      => __( 'Border Radius', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_front'] => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} ' . $css_scheme['animated_box_front'] . ' .novaworks-animated-box__overlay' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_front'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            array(
                'name' => 'front_box_shadow',
                'exclude' => array(
                    'box_shadow_position',
                ),
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_front'],
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_general_styles',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            array(
                'name'     => 'back_side_background',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_back'],
            )
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            array(
                'name'        => 'back_border',
                'label'       => esc_html__( 'Border', 'novaworks' ),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} ' . $css_scheme['animated_box_back'],
            )
        );

        $this->add_responsive_control(
            'back_border_radius',
            array(
                'label'      => __( 'Border Radius', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_back'] => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} ' . $css_scheme['animated_box_back'] . ' .novaworks-animated-box__overlay' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_back'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            array(
                'name'    => 'back_box_shadow',
                'exclude' => array(
                    'box_shadow_position',
                ),
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_back'],
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Icon Style Section
         */
        $this->start_controls_section(
            'section_animated_box_icon_style',
            array(
                'label'      => esc_html__( 'Icon', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->start_controls_tabs( 'icon_style_tabs' );

        $this->start_controls_tab(
            'tab_front_icon_styles',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_control(
            'front_icon_color',
            array(
                'label' => esc_html__( 'Icon Color', 'novaworks' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .novaworks-animated-box__icon--front' => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_control(
            'front_icon_bg_color',
            array(
                'label' => esc_html__( 'Icon Background Color', 'novaworks' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .novaworks-animated-box__icon--front .novaworks-animated-box-icon-inner' => 'background-color: {{VALUE}}',
                ),
            )
        );

        $this->add_responsive_control(
            'front_icon_font_size',
            array(
                'label'      => esc_html__( 'Icon Font Size', 'novaworks' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => array(
                    'px', 'em'
                ),
                'range'      => array(
                    'px' => array(
                        'min' => 18,
                        'max' => 200,
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} .novaworks-animated-box__icon--front .novaworks-animated-box-icon-inner' => 'font-size: {{SIZE}}{{UNIT}}',
                ),
            )
        );

        $this->add_responsive_control(
            'front_icon_size',
            array(
                'label'      => esc_html__( 'Icon Box Size', 'novaworks' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => array(
                    'px', 'em', '%',
                ),
                'range'      => array(
                    'px' => array(
                        'min' => 18,
                        'max' => 200,
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_front'] . ' .novaworks-animated-box-icon-inner' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            array(
                'name'        => 'front_icon_border',
                'label'       => esc_html__( 'Border', 'novaworks' ),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} ' . $css_scheme['animated_box_icon_front'] . ' .novaworks-animated-box-icon-inner',
            )
        );

        $this->add_control(
            'front_icon_box_border_radius',
            array(
                'label'      => esc_html__( 'Border Radius', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_front'] . ' .novaworks-animated-box-icon-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_icon_box_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_front']. ' .novaworks-animated-box-icon-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            array(
                'name'     => 'front_icon_box_shadow',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_icon_front'] . ' .novaworks-animated-box-icon-inner',
            )
        );

        $this->add_responsive_control(
            'front_icon_box_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_front'] => 'justify-content: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_icon_styles',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_control(
            'back_icon_color',
            array(
                'label' => esc_html__( 'Icon Color', 'novaworks' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .novaworks-animated-box__icon--back' => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_control(
            'back_icon_bg_color',
            array(
                'label' => esc_html__( 'Icon Background Color', 'novaworks' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] . ' .novaworks-animated-box-icon-inner' => 'background-color: {{VALUE}}',
                ),
            )
        );

        $this->add_responsive_control(
            'back_icon_font_size',
            array(
                'label'      => esc_html__( 'Icon Font Size', 'novaworks' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => array(
                    'px', 'em'
                ),
                'range'      => array(
                    'px' => array(
                        'min' => 18,
                        'max' => 200,
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} .novaworks-animated-box__icon--back .novaworks-animated-box-icon-inner' => 'font-size: {{SIZE}}{{UNIT}}',
                ),
            )
        );

        $this->add_responsive_control(
            'back_icon_size',
            array(
                'label'      => esc_html__( 'Icon Box Size', 'novaworks' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => array(
                    'px', 'em', '%',
                ),
                'range'      => array(
                    'px' => array(
                        'min' => 18,
                        'max' => 200,
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] . ' .novaworks-animated-box-icon-inner' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            array(
                'name'        => 'back_icon_border',
                'label'       => esc_html__( 'Border', 'novaworks' ),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] . ' .novaworks-animated-box-icon-inner',
            )
        );

        $this->add_control(
            'back_icon_box_border_radius',
            array(
                'label'      => esc_html__( 'Border Radius', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] . ' .novaworks-animated-box-icon-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_icon_box_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] . ' .novaworks-animated-box-icon-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            array(
                'name'     => 'back_icon_box_shadow',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] . ' .novaworks-animated-box-icon-inner',
            )
        );

        $this->add_responsive_control(
            'back_icon_box_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_icon_back'] => 'justify-content: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Title Style Section
         */
        $this->start_controls_section(
            'section_animated_box_title_style',
            array(
                'label'      => esc_html__( 'Title', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->start_controls_tabs( 'title_style_tabs' );

        $this->start_controls_tab(
            'tab_front_title_styles',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_control(
            'front_title_color',
            array(
                'label'  => esc_html__( 'Title Color', 'novaworks' ),
                'type'   => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_front'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'front_title_typography',

                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_title_front'],
            )
        );

        $this->add_responsive_control(
            'front_title_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_front'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_title_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_front'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_title_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_front'] => 'align-self: {{VALUE}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_title_text_alignment',
            array(
                'label'   => esc_html__( 'Text Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'left'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-text-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-text-align-center',
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-text-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_front'] => 'text-align: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_title_styles',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_control(
            'back_title_color',
            array(
                'label'  => esc_html__( 'Title Color', 'novaworks' ),
                'type'   => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_back'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'back_title_typography',

                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_title_back'],
            )
        );

        $this->add_responsive_control(
            'back_title_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_back'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_title_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_back'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_title_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_back'] => 'align-self: {{VALUE}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_title_text_alignment',
            array(
                'label'   => esc_html__( 'Text Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'left'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-text-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-text-align-center',
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-text-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_title_back'] => 'text-align: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Subtitle Style Section
         */
        $this->start_controls_section(
            'section_animated_box_subtitle_style',
            array(
                'label'      => esc_html__( 'Subtitle', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->start_controls_tabs( 'subtitle_style_tabs' );

        $this->start_controls_tab(
            'tab_front_subtitle_styles',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_control(
            'front_subtitle_color',
            array(
                'label'  => esc_html__( 'Subtitle Color', 'novaworks' ),
                'type'   => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_front'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'front_subtitle_typography',

                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_front'],
            )
        );

        $this->add_responsive_control(
            'front_subtitle_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_front'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_subtitle_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_front'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_subtitle_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_front'] => 'align-self: {{VALUE}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_subtitle_text_alignment',
            array(
                'label'   => esc_html__( 'Text Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'left'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-text-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-text-align-center',
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-text-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_front'] => 'text-align: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_subtitle_styles',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_control(
            'back_subtitle_color',
            array(
                'label'  => esc_html__( 'Subtitle Color', 'novaworks' ),
                'type'   => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_back'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'back_subtitle_typography',

                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_back'],
            )
        );

        $this->add_responsive_control(
            'back_subtitle_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_back'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_subtitle_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_back'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_subtitle_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_back'] => 'align-self: {{VALUE}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_subtitle_text_alignment',
            array(
                'label'   => esc_html__( 'Text Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'left'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-text-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-text-align-center',
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-text-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_subtitle_back'] => 'text-align: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Description Style Section
         */
        $this->start_controls_section(
            'section_animated_box_description_style',
            array(
                'label'      => esc_html__( 'Description', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->start_controls_tabs( 'description_style_tabs' );

        $this->start_controls_tab(
            'tab_front_description_styles',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_control(
            'front_description_color',
            array(
                'label'  => esc_html__( 'Description Color', 'novaworks' ),
                'type'   => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_front'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'front_description_typography',

                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_desc_front'],
            )
        );

        $this->add_responsive_control(
            'front_description_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_front'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_description_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_front'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'front_description_alignment',
            array(
                'label'   => esc_html__( 'Text Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'left'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-text-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-text-align-center',
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-text-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_front'] => 'text-align: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_description_styles',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_control(
            'back_description_color',
            array(
                'label'  => esc_html__( 'Description Color', 'novaworks' ),
                'type'   => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_back'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'back_description_typography',

                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_desc_back'],
            )
        );

        $this->add_responsive_control(
            'back_description_padding',
            array(
                'label'      => __( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_back'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_description_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_back'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'back_description_alignment',
            array(
                'label'   => esc_html__( 'Text Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'left'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-text-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-text-align-center',
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-text-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_desc_back'] => 'text-align: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Action Button Style Section
         */
        $this->start_controls_section(
            'section_action_button_style',
            array(
                'label'      => esc_html__( 'Action Button', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->add_responsive_control(
            'back_button_alignment',
            array(
                'label'   => esc_html__( 'Alignment', 'novaworks' ),
                'type'    => Controls_Manager::CHOOSE,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => array(
                        'title' => esc_html__( 'Left', 'novaworks' ),
                        'icon'  => 'eicon-h-align-left',
                    ),
                    'center' => array(
                        'title' => esc_html__( 'Center', 'novaworks' ),
                        'icon'  => 'eicon-h-align-center',
                    ),
                    'flex-end' => array(
                        'title' => esc_html__( 'Right', 'novaworks' ),
                        'icon'  => 'eicon-h-align-right',
                    ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] => 'align-self: {{VALUE}};',
                ),
            )
        );

        $this->add_control(
            'add_button_icon',
            array(
                'label'        => esc_html__( 'Add Icon', 'novaworks' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Yes', 'novaworks' ),
                'label_off'    => esc_html__( 'No', 'novaworks' ),
                'return_value' => 'yes',
                'default'      => 'false',
            )
        );

	    $this->add_control(
		    'button_icon',
		    [
			    'label' => __( 'Icon', 'novaworks' ),
			    'type' => Controls_Manager::ICONS,
			    'fa4compatibility' => 'icon',
			    'condition' => [
				    'add_button_icon' => 'yes'
			    ]
		    ]
	    );

        $this->add_control(
            'button_icon_position',
            array(
                'label'   => esc_html__( 'Icon Position', 'novaworks' ),
                'type'    => Controls_Manager::SELECT,
                'options' => array(
                    'before'  => esc_html__( 'Before Text', 'novaworks' ),
                    'after' => esc_html__( 'After Text', 'novaworks' ),
                ),
                'default'     => 'after',
                'render_type' => 'template',
                'condition' => array(
                    'add_button_icon' => 'yes',
                ),
            )
        );

        $this->add_control(
            'button_icon_size',
            array(
                'label' => esc_html__( 'Icon Size', 'novaworks' ),
                'type' => Controls_Manager::SLIDER,
                'range' => array(
                    'px' => array(
                        'min' => 7,
                        'max' => 90,
                    ),
                ),
                'condition' => array(
                    'add_button_icon' => 'yes',
                ),
                'selectors' => array(
                    '{{WRAPPER}} .elementor-wrap-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ),
            )
        );

        $this->add_control(
            'button_icon_color',
            array(
                'label'     => esc_html__( 'Icon Color', 'novaworks' ),
                'type'      => Controls_Manager::COLOR,
                'condition' => array(
                    'add_button_icon' => 'yes',
                ),
                'selectors' => array(
	                '{{WRAPPER}} .elementor-wrap-icon' => 'color: {{VALUE}};',
	                '{{WRAPPER}} .elementor-wrap-icon svg' => 'fill: {{VALUE}};',
                ),
            )
        );

        $this->add_responsive_control(
            'button_icon_margin',
            array(
                'label'      => esc_html__( 'Icon Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%', 'em' ),
                'selectors'  => array(
                    '{{WRAPPER}} .elementor-wrap-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->start_controls_tabs( 'tabs_button_style' );

        $this->start_controls_tab(
            'tab_button_normal',
            array(
                'label' => esc_html__( 'Normal', 'novaworks' ),
            )
        );

        $this->add_control(
            'button_bg_color',
            array(
                'label' => esc_html__( 'Background Color', 'novaworks' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] => 'background-color: {{VALUE}}',
                ),
            )
        );

        $this->add_control(
            'button_color',
            array(
                'label'     => esc_html__( 'Text Color', 'novaworks' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'button_typography',

                'selector' => '{{WRAPPER}}  ' . $css_scheme['animated_box_button'],
            )
        );

        $this->add_responsive_control(
            'button_padding',
            array(
                'label'      => esc_html__( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%', 'em' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'button_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'button_border_radius',
            array(
                'label'      => esc_html__( 'Border Radius', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            array(
                'name'        => 'button_border',
                'label'       => esc_html__( 'Border', 'novaworks' ),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} ' . $css_scheme['animated_box_button'],
            )
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            array(
                'name'     => 'button_box_shadow',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_button'],
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_button_hover',
            array(
                'label' => esc_html__( 'Hover', 'novaworks' ),
            )
        );

        $this->add_control(
            'button_hover_bg_color',
            array(
                'label'     => esc_html__( 'Background Color', 'novaworks' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover' => 'background-color: {{VALUE}}',
                ),
            )
        );

        $this->add_control(
            'button_hover_color',
            array(
                'label'     => esc_html__( 'Text Color', 'novaworks' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover' => 'color: {{VALUE}}',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            array(
                'name'     => 'button_hover_typography',
                'selector' => '{{WRAPPER}}  ' . $css_scheme['animated_box_button'] . ':hover',
            )
        );

        $this->add_responsive_control(
            'button_hover_padding',
            array(
                'label'      => esc_html__( 'Padding', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%', 'em' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'button_hover_margin',
            array(
                'label'      => __( 'Margin', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_responsive_control(
            'button_hover_border_radius',
            array(
                'label'      => esc_html__( 'Border Radius', 'novaworks' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => array( 'px', '%' ),
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ),
            )
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            array(
                'name'        => 'button_hover_border',
                'label'       => esc_html__( 'Border', 'novaworks' ),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover',
            )
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            array(
                'name'     => 'button_hover_box_shadow',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_button'] . ':hover',
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Overlay Style Section
         */
        $this->start_controls_section(
            'section_overlay_style',
            array(
                'label'      => esc_html__( 'Overlay', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->start_controls_tabs( 'tabs_overlay_style' );

        $this->start_controls_tab(
            'tab_front_overlay',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            array(
                'name'     => 'front_overlay_background',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_front'] . ' .novaworks-animated-box__overlay',
            )
        );

        $this->add_control(
            'front_overlay_opacity',
            array(
                'label'   => esc_html__( 'Opacity', 'novaworks' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => '0',
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1,
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_front'] . ' .novaworks-animated-box__overlay' => 'opacity: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_overlay',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            array(
                'name'     => 'back_overlay_background',
                'selector' => '{{WRAPPER}} ' . $css_scheme['animated_box_back'] . ' .novaworks-animated-box__overlay',
            )
        );

        $this->add_control(
            'back_overlay_opacity',
            array(
                'label'   => esc_html__( 'Opacity', 'novaworks' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => '0',
                'min'     => 0,
                'max'     => 1,
                'step'    => 0.1,
                'selectors'  => array(
                    '{{WRAPPER}} ' . $css_scheme['animated_box_back'] . ' .novaworks-animated-box__overlay' => 'opacity: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        /**
         * Order Style Section
         */
        $this->start_controls_section(
            'section_order_style',
            array(
                'label'      => esc_html__( 'Order', 'novaworks' ),
                'tab'        => Controls_Manager::TAB_STYLE,
                'show_label' => false,
            )
        );

        $this->start_controls_tabs( 'tabs_order_style' );

        $this->start_controls_tab(
            'tab_front_order',
            array(
                'label' => esc_html__( 'Front', 'novaworks' ),
            )
        );

        $this->add_control(
            'front_side_icon_order',
            array(
                'label'   => esc_html__( 'Icon Order', 'novaworks' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => 1,
                'min'     => 1,
                'max'     => 2,
                'step'    => 1,
                'selectors' => array(
                    '{{WRAPPER}} '. $css_scheme['animated_box_icon_front'] => 'order: {{VALUE}};',
                ),
            )
        );

        $this->add_control(
            'front_side_content_order',
            array(
                'label'   => esc_html__( 'Content Order', 'novaworks' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => 2,
                'min'     => 1,
                'max'     => 2,
                'step'    => 1,
                'selectors' => array(
                    '{{WRAPPER}} '. $css_scheme['animated_box_front'] . ' .novaworks-animated-box__content' => 'order: {{VALUE}};',
                ),
            )
        );

        $this->add_control(
            'front_vertical_alignment',
            array(
                'label'   => esc_html__( 'Vertical Alignment', 'novaworks' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => esc_html__( 'Top', 'novaworks' ),
                    'center'        => esc_html__( 'Center', 'novaworks' ),
                    'flex-end'      => esc_html__( 'Bottom', 'novaworks' ),
                    'space-between' => esc_html__( 'Space Between', 'novaworks' ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} '. $css_scheme['animated_box_front'] . ' .novaworks-animated-box__inner' => 'justify-content: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_back_order',
            array(
                'label' => esc_html__( 'Back', 'novaworks' ),
            )
        );

        $this->add_control(
            'back_side_icon_order',
            array(
                'label'   => esc_html__( 'Icon Order', 'novaworks' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => 1,
                'min'     => 1,
                'max'     => 2,
                'step'    => 1,
                'selectors' => array(
                    '{{WRAPPER}} '. $css_scheme['animated_box_icon_back'] => 'order: {{VALUE}};',
                ),
            )
        );

        $this->add_control(
            'back_side_content_order',
            array(
                'label'   => esc_html__( 'Content Order', 'novaworks' ),
                'type'    => Controls_Manager::NUMBER,
                'default' => 2,
                'min'     => 1,
                'max'     => 2,
                'step'    => 1,
                'selectors' => array(
                    '{{WRAPPER}} '. $css_scheme['animated_box_back'] . ' .novaworks-animated-box__content' => 'order: {{VALUE}};',
                ),
            )
        );

        $this->add_control(
            'back_vertical_alignment',
            array(
                'label'   => esc_html__( 'Vertical Alignment', 'novaworks' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'center',
                'options' => array(
                    'flex-start'    => esc_html__( 'Top', 'novaworks' ),
                    'center'        => esc_html__( 'Center', 'novaworks' ),
                    'flex-end'      => esc_html__( 'Bottom', 'novaworks' ),
                    'space-between' => esc_html__( 'Space Between', 'novaworks' ),
                ),
                'selectors'  => array(
                    '{{WRAPPER}} '. $css_scheme['animated_box_back'] . ' .novaworks-animated-box__inner' => 'justify-content: {{VALUE}};',
                ),
            )
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

    }

    protected function render() {

        $this->__context = 'render';

        $this->__open_wrap();
        include $this->__get_global_template( 'index' );
        $this->__close_wrap();
    }

}
