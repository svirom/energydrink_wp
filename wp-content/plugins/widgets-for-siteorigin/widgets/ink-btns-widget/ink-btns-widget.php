<?php

/*
Widget Name: Inked Buttons
Description: The power of click!
Author: wpinked
Author URI: http://widgets.wpinked.com
*/

class Inked_Buttons_SO_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'ink-buttons',
			__( 'Inked Buttons', 'wpinked-widgets' ),
			array(
				'description' => __( 'The power of click!', 'wpinked-widgets' ),
				'help'        => 'http://widgets-docs.wpinked.com/article/30-button-widget'
			),
			array(
			),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form() {
		return array(

			'text'           => array(
				'type'          => 'text',
				'label'         => __( 'Button text', 'wpinked-widgets' ),
			),

			'url'            => array(
				'type'          => 'link',
				'label'         => __( 'Destination URL', 'wpinked-widgets' ),
			),

			'new_window'     => array(
				'type'          => 'checkbox',
				'default'       => false,
				'label'         => __( 'Open in a new window', 'wpinked-widgets' ),
			),

			'icon'           => array(
				'type'          => 'section',
				'label'         => __( 'Icon', 'wpinked-widgets' ),
				'hide'          => true,
				'fields'        => array(

					'select'       => array(
						'type'        => 'icon',
						'label'       => __( 'Icon', 'wpinked-widgets' ),
					),

					'location'     => array(
						'type'        => 'select',
						'label'       => __( 'Location', 'wpinked-widgets' ),
						'default'     => 'left',
						'options'     => array(
							'left'       => __( 'Before Text', 'wpinked-widgets' ),
							'right'      => __( 'After Text', 'wpinked-widgets' ),
							'above'      => __( 'Above Text', 'wpinked-widgets' )
						)
					)

				),
			),

			'styling' => array(
				'type'   => 'section',
				'label'         => __( 'Styling', 'wpinked-widgets' ),
				'hide'          => true,
				'fields'        => array(

					'align'        => array(
						'type'        => 'select',
						'label'       => __( 'Button Alignment', 'wpinked-widgets' ),
						'default'     => 'center',
						'options'     => array(
							'left'       => __( 'Left', 'wpinked-widgets' ),
							'right'      => __( 'Right', 'wpinked-widgets' ),
							'center'     => __( 'Center', 'wpinked-widgets' ),
							'full'       => __( 'Full Width', 'wpinked-widgets' ),
						),
					),

					'theme'        => array(
						'type'        => 'select',
						'label'       => __( 'Theme', 'wpinked-widgets' ),
						'default'     => 'classic',
						'options'     => array(
							'classic'    => __( 'Classic', 'wpinked-widgets' ),
							'flat'       => __( 'Flat', 'wpinked-widgets' ),
							'outline'    => __( 'Outline', 'wpinked-widgets' ),
							'threed'     => __( '3D', 'wpinked-widgets' ),
							'shadow'     => __( 'Shadow', 'wpinked-widgets' ),
							'deline'     => __( 'Deline', 'wpinked-widgets' ),
						),
					),

					'button_color' => array(
						'type'        => 'color',
						'label'       => __( 'Highlight Color', 'wpinked-widgets' ),
						'description' => __( 'Typically used as button background.', 'wpinked-widgets' ),
					),

					'text_color'   => array(
						'type'        => 'color',
						'label'       => __( 'Base Color', 'wpinked-widgets' ),
						'description' => __( 'Typically used as text color.', 'wpinked-widgets' ),
					),

					'font'             => array(
						'type'                => 'premium',
						'label'               => __( 'Font', 'wpinked-widgets' ),
					),

					'hover'        => array(
						'type'        => 'checkbox',
						'default'     => true,
						'label'       => __( 'Use hover effect ?', 'wpinked-widgets' ),
					),

					'click'        => array(
						'type'        => 'checkbox',
						'default'     => true,
						'label'       => __( 'Use click effect ?', 'wpinked-widgets' ),
					),

					'corners'      => array(
						'type'        => 'select',
						'label'       => __( 'Corners', 'wpinked-widgets' ),
						'default'     => '0.25em',
						'options'     => array(
							'0em'        => __( 'Sharp', 'wpinked-widgets' ),
							'0.25em'     => __( 'Slightly curved', 'wpinked-widgets' ),
							'0.75em'     => __( 'Highly curved', 'wpinked-widgets' ),
							'1.5em'      => __( 'Round', 'wpinked-widgets' ),
						),
					),

					'size'         => array(
						'type'        => 'select',
						'label'       => __( 'Size', 'wpinked-widgets' ),
						'default'     => 'standard',
						'options'     => array(
							'tiny'       => __( 'Tiny', 'wpinked-widgets' ),
							'small'      => __( 'Small', 'wpinked-widgets' ),
							'standard'   => __( 'Standard', 'wpinked-widgets' ),
							'large'      => __( 'Large', 'wpinked-widgets' ),
						),
					),

				),
			),

			'attributes'     => array(
				'type'          => 'section',
				'label'         => __( 'Attributes and SEO', 'wpinked-widgets' ),
				'hide'          => true,
				'fields'        => array(

					'id'           => array(
						'type'        => 'text',
						'label'       => __( 'Button ID', 'wpinked-widgets' ),
						'description' => __( 'An ID attribute allows you to target this button in Javascript.', 'wpinked-widgets' ),
					),

					'title'        => array(
						'type'        => 'text',
						'label'       => __( 'Title attribute', 'wpinked-widgets' ),
						'description' => __( 'Adds a title attribute to the button link.', 'wpinked-widgets' ),
					),

					'onclick'      => array(
						'type'        => 'text',
						'label'       => __( 'Onclick', 'wpinked-widgets' ),
						'description' => __( 'Run this Javascript when the button is clicked. Ideal for tracking.', 'wpinked-widgets' ),
					),

					'class'           => array(
						'type'        => 'text',
						'label'       => __( 'Button Class', 'wpinked-widgets' ),
						'description' => __( 'A Class attribute allows you to style this button with CSS.', 'wpinked-widgets' ),
					),
				)
			),

		);
	}

	function get_template_name( $instance ) {
		return 'buttons';
	}

	function get_style_name( $instance ) {
		return 'buttons';
	}

	function initialize() {

		$this->register_frontend_styles(
			array(
				array( 'iw-buttons-css', plugin_dir_url(__FILE__) . 'css/buttons.css', array(), INKED_SO_VER )
			)
		);

	}

	function get_less_variables( $instance ) {

		if( empty( $instance ) ) return array();

		$less_variables = array(
			'radius' => $instance['styling']['corners'],
			'size'   => $instance['styling']['size'],
			'text'   => $instance['styling']['text_color'],
			'button' => $instance['styling']['button_color'],
			'align'  => $instance['styling']['align'],
			'icon'   => $instance['icon']['location'],
			'theme'  => $instance['styling']['theme'],
		);

		if ( $instance['styling']['font'] && function_exists( 'wpinked_pro_so_widgets' ) ) {
			$selected_font = siteorigin_widget_get_font( $instance['styling']['font'] );
			$less_variables['font-fly'] = $selected_font['family'];
			if( ! empty( $selected_font['weight'] ) ) {
				$less_variables['font-wt'] = $selected_font['weight'];
			}
		}
		return $less_variables;

	}

	function get_google_font_fields( $instance ) {
		if( empty( $instance ) || ! function_exists( 'wpinked_pro_so_widgets' ) ) return array();

		$fonts = array();
		if ( $instance['styling']['font'] ) {
			$fonts[] = $instance['styling']['font'];
		}
		return $fonts;
	}

	function get_template_variables( $instance, $args ) {

		if( empty( $instance ) ) return array();

		return array(
			'text'    => $instance['text'],
			'url'     => $instance['url'],
			'target'  => $instance['new_window'],
			'icon'    => $instance['icon']['select'],
			'hover'   => $instance['styling']['hover'],
			'click'   => $instance['styling']['click'],
			'id'      => $instance['attributes']['id'],
			'title'   => $instance['attributes']['title'],
			'onclick' => $instance['attributes']['onclick'],
			'class'   => $instance['attributes']['class'],
		);
	}

}

siteorigin_widget_register( 'ink-buttons', __FILE__, 'Inked_Buttons_SO_Widget' );
