<?php
if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_55c53f94dd7c4',
	'title' => 'About Page Content',
	'fields' => array (
		array (
			'key' => 'field_55c53f9c6f578',
			'label' => 'Main Content',
			'name' => 'main_content',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 1,
			'max' => 1,
			'layout' => 'block',
			'button_label' => 'Add Main Content',
			'sub_fields' => array (
				array (
					'key' => 'field_55c53fbb6f579',
					'label' => 'column content',
					'name' => 'column_content',
					'prefix' => '',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 70,
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
				array (
					'key' => 'field_55c53fd06f57a',
					'label' => 'image',
					'name' => 'image',
					'prefix' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => 30,
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
		array (
			'key' => 'field_55c54189334c9',
			'label' => 'Team Members',
			'name' => 'team_members',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Team Member',
			'sub_fields' => array (
				array (
					'key' => 'field_55c54196334ca',
					'label' => 'Image',
					'name' => 'image',
					'prefix' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_55c541b5334cb',
					'label' => 'Full Name',
					'name' => 'name',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55c541bf334cc',
					'label' => 'Job Title',
					'name' => 'job_title',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-pages/page-about.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'modified' => 1438991231,
));

register_field_group(array (
	'key' => 'group_55c54d378d8d6',
	'title' => 'Contact Page Content',
	'fields' => array (
		array (
			'key' => 'field_55c54d3cb8fa5',
			'label' => 'Main Content',
			'name' => 'main_content',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 1,
			'max' => 1,
			'layout' => 'row',
			'button_label' => 'Add Main Content',
			'sub_fields' => array (
				array (
					'key' => 'field_55c54d4ab8fa6',
					'label' => 'Image',
					'name' => 'image',
					'prefix' => '',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_55c54d51b8fa7',
					'label' => 'Contact Details',
					'name' => 'contact_details',
					'prefix' => '',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-pages/page-contact.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'modified' => 1438993858,
));

endif;
?>