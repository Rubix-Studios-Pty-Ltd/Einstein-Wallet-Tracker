<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Cronos_Wallet_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'cronos-wallet-tracker';
    }

    public function get_title() {
        return __('Cronos Wallet Tracker', 'cronos-wallet-tracker');
    }

    public function get_icon() {
        return 'eicon-counter';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function _register_controls() {
        // Content Section
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'cronos-wallet-tracker'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'heading_text',
            [
                'label' => __('Heading Text', 'cronos-wallet-tracker'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Heading', 'cronos-wallet-tracker' ),
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Box Style', 'cronos-wallet-tracker'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'background_color',
            [
                'label' => __( 'Background Color', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'border_width',
            [
                'label' => __( 'Border Width', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'border_style',
            [
                'label' => __( 'Border Style', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'none' => __( 'None', 'cronos-wallet-tracker' ),
                    'solid' => __( 'Solid', 'cronos-wallet-tracker' ),
                    'dashed' => __( 'Dashed', 'cronos-wallet-tracker' ),
                    'dotted' => __( 'Dotted', 'cronos-wallet-tracker' ),
                    'double' => __( 'Double', 'cronos-wallet-tracker' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'border-style: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'border_color',
            [
                'label' => __( 'Border Color', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'max_width',
            [
                'label' => __( 'Max Width (%)', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'max-width: {{SIZE}}%;',
                ],
            ]
        );

        $this->add_responsive_control(
            'min_width',
            [
                'label' => __( 'Min Width', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'min-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'margin',
            [
                'label' => __( 'Margin', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em', 'rem' ],
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'padding',
            [
                'label' => __( 'Padding', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em', 'rem' ],
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'text_alignment',
            [
                'label' => __( 'Text Alignment', 'cronos-wallet-tracker' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'cronos-wallet-tracker' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'cronos-wallet-tracker' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'cronos-wallet-tracker' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => __( 'Justified', 'cronos-wallet-tracker' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} #cronos-wallet-tracker' => 'text-align: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => __( 'Box Shadow', 'cronos-wallet-tracker' ),
                'selector' => '{{WRAPPER}} #cronos-wallet-tracker',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings();
        ?>
        <div id="cronos-wallet-tracker">
            <?php
            if ( !empty( $settings['heading_text']) ) {
            echo '<h2>'. $settings['heading_text'] .'</h2>';
            }
            ?>
            <h3>Team</h3>
            <div class="wallet-background">
                <div class="team-wallet-tracker" style="width: 0%;"></div>
            </div>
            <div class="address-link"><strong>Address:</strong> <a href="https://cronoscan.com/token/0x7a203020bf188a0dc5948a5125722789cad63cf2?a=0xEE6F68Bd820dF32B45FFa7CDEf560e4B0Cad1e69" class="wallet-address">View Wallet</a></div>
            <h3>Marketing</h3>
            <div class="wallet-background">
                <div class="marketing-wallet-tracker" style="width: 0%;"></div>
            </div>
            <div class="address-link"><strong>Address:</strong> <a href="https://cronoscan.com/token/0x7a203020bf188a0dc5948a5125722789cad63cf2?a=0x572ad49A9C0079247582dC35Bb2F7A65876c7680" class="wallet-address">View Wallet</a></div>
            <h3>Products</h3>
            <div class="wallet-background">
                <div class="products-wallet-tracker" style="width: 0%;"></div>
            </div>
            <div class="address-link"><strong>Address:</strong> <a href="https://cronoscan.com/token/0x7a203020bf188a0dc5948a5125722789cad63cf2?a=0x36706478bCd950F92365cd92e108A073c19033Da" class="wallet-address">View Wallet</a></div>
            <h3>Reserves</h3>
            <div class="wallet-background">
                <div class="reserves-wallet-tracker" style="width: 0%;"></div>
            </div>    
            <div class="address-link"><strong>Address:</strong> <a href="https://cronoscan.com/token/0x7a203020bf188a0dc5948a5125722789cad63cf2?a=0xe141534229507B97439078B9F8A0F77DEC41411E" class="wallet-address">View Wallet</a></div>
        </div>

        <script src="<?php echo plugin_dir_url( __FILE__ ) . 'js/web3.min.js'; ?>"></script>
        <script src="<?php echo plugin_dir_url( __FILE__ ) . 'js/cronos-wallet-tracker.js'; ?>"></script>
        <?php
    }
}