<?php
/**
 * WordPress Settings Framework
 *
 * @author  Gilbert Pellegrom, James Kemp
 * @link    https://github.com/gilbitron/WordPress-Settings-Framework
 * @license MIT
 */

/**
 * Define your settings
 *
 * The first parameter of this filter should be wpsf_register_settings_[options_group],
 * in this case "my_example_settings".
 *
 * Your "options_group" is the second param you use when running new WordPressSettingsFramework()
 * from your init function. It's important as it differentiates your options from others.
 *
 * To use the tabbed example, simply change the second param in the filter below to 'wpsf_tabbed_settings'
 * and check out the tabbed settings function on line 156.
 */

add_filter( 'wpsf_register_settings_my_example_settings', 'wpsf_tabless_settings' );

/**
 * Tabless example.
 * 
 * @param array $wpsf_settings Settings.
 */
function wpsf_tabless_settings( $wpsf_settings ) {
	// General Settings section
	$wpsf_settings[] = array(
		'section_id'          => 'general',
		'section_title'       => 'General Settings',
		'section_description' => 'Some intro description about this section.',
		'section_order'       => 5,
		'fields'              => array(
			array(
				'id'          => 'text',
				'title'       => 'Text',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'text',
				'default'     => 'This is default',
			),
			array(
				'id'      => 'number',
				'title'   => 'Number',
				'desc'    => 'This is a description.',
				'type'    => 'number',
				'default' => 10,
			),
			array(
				'id'         => 'time',
				'title'      => 'Time Picker',
				'desc'       => 'This is a description.',
				'type'       => 'time',
				'timepicker' => array(), // Array of timepicker options (http://fgelinas.com/code/timepicker)
			),
			array(
				'id'         => 'date',
				'title'      => 'Date Picker',
				'desc'       => 'This is a description.',
				'type'       => 'date',
				'datepicker' => array(), // Array of datepicker options (http://api.jqueryui.com/datepicker/)
			),
			array(
				'id'        => 'group',
				'title'     => 'Group',
				'desc'      => 'This is a description.',
				'type'      => 'group',
				'subfields' => array(
					// accepts most types of fields
					array(
						'id'          => 'sub-text',
						'title'       => 'Sub Text',
						'desc'        => 'This is a description.',
						'placeholder' => 'This is a placeholder.',
						'type'        => 'text',
						'default'     => 'Sub text',
					),
				),
			),
			array(
				'id'          => 'password',
				'title'       => 'Password',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'password',
				'default'     => 'Example',
			),
			array(
				'id'          => 'textarea',
				'title'       => 'Textarea',
				'desc'        => 'This is a description.',
				'placeholder' => 'This is a placeholder.',
				'type'        => 'textarea',
				'default'     => 'This is default',
			),
			array(
				'id'      => 'select',
				'title'   => 'Select',
				'desc'    => 'This is a description.',
				'type'    => 'select',
				'default' => 'green',
				'choices' => array(
					'red'   => 'Red',
					'green' => 'Green',
					'blue'  => 'Blue',
				),
			),
			array(
				'id'      => 'radio',
				'title'   => 'Radio',
				'desc'    => 'This is a description.',
				'type'    => 'radio',
				'default' => 'green',
				'choices' => array(
					'red'   => 'Red',
					'green' => 'Green',
					'blue'  => 'Blue',
				),
			),
			array(
				'id'      => 'checkbox',
				'title'   => 'Checkbox',
				'desc'    => 'This is a description.',
				'type'    => 'checkbox',
				'default' => 1,
			),
			array(
				'id'      => 'checkboxes',
				'title'   => 'Checkboxes',
				'desc'    => 'This is a description.',
				'type'    => 'checkboxes',
				'default' => array(
					'red',
					'blue',
				),
				'choices' => array(
					'red'   => 'Red',
					'green' => 'Green',
					'blue'  => 'Blue',
				),
			),
			array(
				'id'      => 'color',
				'title'   => 'Color',
				'desc'    => 'This is a description.',
				'type'    => 'color',
				'default' => '#ffffff',
			),
			array(
				'id'      => 'file',
				'title'   => 'File',
				'desc'    => 'This is a description.',
				'type'    => 'file',
				'default' => '',
			),
			array(
				'id'      => 'editor',
				'title'   => 'Editor',
				'desc'    => 'This is a description.',
				'type'    => 'editor',
				'default' => '',
			),
		),
	);

	// More Settings section.
	$wpsf_settings[] = array(
		'section_id'    => 'more',
		'section_title' => 'More Settings',
		'section_order' => 10,
		'fields'        => array(
			array(
				'id'      => 'more-text',
				'title'   => 'More Text',
				'desc'    => 'This is a description.',
				'type'    => 'text',
				'default' => 'This is default',
			),
			array(
				'id'              => 'control-group',
				'title'           => 'Control Group',
				'subtitle'        => 'Selection option 1 or 2 to show and hide controls.',
				'type'            => 'select',
				'choices'         => array(
					'option-1' => 'Option 1',
					'option-2' => 'Option 2',
					'option-3' => 'Option 3',
				),
				'default'         => 'text',
				'show_controller' => 'control-group', // Needs to be set to the same as the control group. Does not have to match the Id of this control.
			),
			array(
				'id'                 => 'show-if-option-1',
				'title'              => 'Show if Option 1',
				'subtitle'           => 'Will show if Option 1 is set.',
				'type'               => 'select',
				'type'               => 'text',
				'default'            => 'This is default',
				'show_control_group' => 'control-group', // Needs to be set to the control group.
				'show_if_value'      => array( 'option-1' ), // show if will hide the control unless the value matches.

			),
			array(
				'id'                 => 'show-if-option-2',
				'title'              => 'Show if Option 2',
				'subtitle'           => 'Will show if Option 2 is set.',
				'type'               => 'select',
				'type'               => 'text',
				'default'            => 'This is default',
				'show_control_group' => 'control-group', // Needs to be set to the control group.
				'show_if_value'      => array( 'option-2' ), // show if will hide the control unless the value matches.
			),
			array(
				'id'                 => 'show-if-option-2-or-3',
				'title'              => 'Show if Option 2 or 3',
				'subtitle'           => 'Will show if Option 2 or 3 is set.',
				'type'               => 'select',
				'type'               => 'text',
				'default'            => 'This is default',
				'show_control_group' => 'control-group', // Needs to be set to the control group.
				'show_if_value'      => array( 'option-2', 'option-3' ), // show if will hide the control unless the value matches.
			),
			array(
				'id'                 => 'hide-if-option-1',
				'title'              => 'Hide if Option 1',
				'subtitle'           => 'Will hide if Option 1 is set.',
				'type'               => 'select',
				'type'               => 'text',
				'default'            => 'This is default',
				'show_control_group' => 'control-group', // Needs to be set to the control group.
				'hide_if_value'      => array( 'option-1' ), // hide if will show the control unless the value matches.
			),
		),
	);

	return $wpsf_settings;
}

/**
 * Tabbed example.
 *
 * @param array $wpsf_settings settings.
 */
function wpsf_tabbed_settings( $wpsf_settings ) {
	// Tabs.
	$wpsf_settings['tabs'] = array(
		array(
			'id'    => 'tab_1',
			'title' => __( 'Tab 1' ),
		),
		array(
			'id'    => 'tab_2',
			'title' => __( 'Tab 2' ),
		),
		array(
			'id'                => 'tab_3',
			'title'             => __( 'Tab 3' ),
			'tab_control_group' => 'tab-control',
			'show_if_value'     => array( true ), // show if will hide the tab unless the value matches.
			// 'hide_if_value'  => array( true ), // hide if will show the tab unless the value matches.
		),
	);

	// Settings.
	$wpsf_settings['sections'] = array(
		array(
			'tab_id'        => 'tab_1',
			'section_id'    => 'section_1',
			'section_title' => 'Section 1',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'text-1',
					'title'   => 'Text',
					'desc'    => 'This is a description.',
					'type'    => 'text',
					'default' => 'This is default',
				),
			),
		),
		array(
			'tab_id'        => 'tab_1',
			'section_id'    => 'section_2',
			'section_title' => 'Section 2',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'text-2',
					'title'   => 'Text',
					'desc'    => 'This is a description.',
					'type'    => 'text',
					'default' => 'This is default',
				),
			),
		),
		array(
			'tab_id'        => 'tab_2',
			'section_id'    => 'section_3',
			'section_title' => 'Section 3',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'text-3',
					'title'   => 'Text',
					'desc'    => 'This is a description.',
					'type'    => 'text',
					'default' => 'This is default',
				),
			),
			array(
				'id'             => 'tab-control',
				'title'          => __( 'Will show Tab 3 if toggled', 'flux-checkout' ),
				'type'           => 'toggle',
				'default'        => false,
				'tab_controller' => 'tab-control', // Needs to be set to the same tab control group. Does not have to match the Id of this control.
			),
		),
		array(
			'tab_id'        => 'tab_3',
			'section_id'    => 'section_4',
			'section_title' => 'Section 4',
			'section_order' => 10,
			'fields'        => array(
				array(
					'id'      => 'text-4',
					'title'   => 'Text',
					'desc'    => 'This is a description.',
					'type'    => 'text',
					'default' => 'This is default',
				),
			),
		),
	);

	return $wpsf_settings;
}
