<?php

$i = 0;
function cyn_acf_unique_id() {
	global $i;
	$i++;
	return "field_$i";
}

#region  general acf
function cyn_register_acf_group( $label, $fields = [], $location = [] ) {
	acf_add_local_field_group(
		[ 
			'key' => cyn_acf_unique_id(),
			'title' => $label,
			'fields' => $fields,
			'location' => $location,
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => [ '' ],
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		]
	);
}

function cyn_acf_add_post_object( $name, $label, $post_type, $width = '', $multiple = 0 ) {
	return [ 
		'key' => cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'type' => 'post_object',
		'post_type' => $post_type,
		'taxonomy' => '',
		'allow_null' => 0,
		'multiple' => $multiple,
		'return_format' => 'id',
		'wrapper' => [ 
			'width' => $width
		]
	];
}

function cyn_acf_add_image( $name, $label ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'type' => 'image',
		'return_format' => 'id',
		'wrapper' => [ 
			'width' => '25'
		]
	];
}

function cyn_acf_add_color( $name, $label ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'type' => 'color_picker',
		'return_format' => 'string',
		'wrapper' => [ 
			'width' => '100'
		]
	];
}

function cyn_acf_add_options(
	$name, $label, $choices, $multiple = 0, $return_format = 'value', $allow_null = 1, $width = '', $key = '' ) {
	if ( $key === '' ) {
		$key = cyn_acf_unique_id();
	}
	return [ 
		'key' => $key,
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'choices' => $choices,
		'default_value' => false,
		'return_format' => $return_format,
		'multiple' => $multiple,
		'allow_null' => $allow_null,
		'ui' => 1,
		'ajax' => 1,
		'placeholder' => "Select $label",
	];
}

function cyn_acf_add_text( $name, $label, $required = 0, $width = '' ) {
	return [ 
		'key' => cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => $required,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
	];
}

function cyn_acf_add_url( $name, $label, $required = 0, $width = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'url',
		'instructions' => '',
		'required' => $required,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
	];
}

function cyn_acf_add_number( $name, $label, $required = 0, $width = '', $append = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'number',
		'instructions' => '',
		'required' => $required,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'default_value' => '',
		'min' => '',
		'max' => '',
		'placeholder' => '',
		'step' => '',
		'prepend' => '',
		'append' => $append,
	];
}

function cyn_acf_add_tab( $label ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => '',
		'aria-label' => '',
		'type' => 'tab',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'placement' => 'top',
		'endpoint' => 0,
	];
}

function cyn_acf_add_google_map( $name, $label, $width = '' ) {
	return [ 
		'key' => cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'google_map',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'center_lat' => '',
		'center_lng' => '',
		'zoom' => '',
		'height' => '',
	];
}

function cyn_acf_add_boolean( $name, $label, $width = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'true_false',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'message' => '',
		'default_value' => 0,
		'ui' => 1,
		'ui_on_text' => 'Yes',
		'ui_off_text' => 'No',
	];
}

function cyn_acf_add_wysiwyg( $name, $label, $width = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'wysiwyg',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'default_value' => '',
		'tabs' => 'visual',
		'toolbar' => 'basic',
		'media_upload' => 0,
		'delay' => 0,
	];
}

function cyn_acf_add_file( $name, $label, $width = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'file',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'return_format' => 'array',
		'library' => 'all',
		'min_size' => '',
		'max_size' => '',
		'mime_types' => '',
	];
}

function cyn_acf_add_time_picker( $name, $label, $width = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'time_picker',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'display_format' => 'H:i',
		'return_format' => 'H:i',
	];
}

function cyn_acf_add_date_picker( $name, $label, $width = '' ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id() . '_' . current_time( 'timestamp' ),
		'label' => $label,
		'name' => $name,
		'aria-label' => '',
		'type' => 'date_picker',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => $width,
			'class' => '',
			'id' => '',
		],
		'display_format' => 'd/m/Y',
		'return_format' => 'd/m/Y',
		'first_day' => 1,
	];
}

function cyn_acf_add_group( $name, $label, $sub_fields ) {
	return [ 
		'key' => 'filed_' . cyn_acf_unique_id(),
		'label' => $label,
		'name' => $name,
		'aria-label' => $name,
		'type' => 'group',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => [ 
			'width' => '',
			'class' => '',
			'id' => '',
		],
		'layout' => 'block',
		'sub_fields' => $sub_fields
	];
}
#endregion