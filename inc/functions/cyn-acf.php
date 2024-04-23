<?php
add_action( 'acf/include_fields', 'cyn_register_acf' );

function cyn_register_acf() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}
	cyn_register_acf_company_settings();

}

function cyn_register_acf_company_settings() {
	$fields = [ 
		cyn_acf_add_number( 'established_year', 'Established Year' ),
		cyn_acf_add_text( 'country', 'country' ),
		cyn_acf_add_text( 'location', 'location' ),
		cyn_acf_add_text( 'phone', 'phone' ),
		cyn_acf_add_image( 'flag', 'Flag' ),
		cyn_acf_add_image( 'logo', 'Logo' ),
		cyn_acf_add_options( 'verified_type', 'Verified Type', [ 'star-supplier', 'supplier' ] ),
		cyn_acf_add_url( 'website', 'website' ),
		cyn_acf_add_color( 'color', 'Color' ),

	];
	$location = [ 
		[ 
			[ 
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			],
		],
	];

	cyn_register_acf_group( 'Company Settings', $fields, $location );
}



