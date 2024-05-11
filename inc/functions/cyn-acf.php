<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	cyn_register_acf_company_settings();
	cyn_register_acf_service_settings();
}

function cyn_register_acf_company_settings()
{
	$fields = [
		cyn_acf_add_number('established_year', 'Established Year'),
		cyn_acf_add_text('country', 'country'),
		cyn_acf_add_text('location', 'location'),
		cyn_acf_add_text('phone', 'phone'),
		cyn_acf_add_image('flag', 'Flag'),
		cyn_acf_add_image('logo', 'Logo'),
		cyn_acf_add_options('verified_type', 'Verified Type', ['star-supplier', 'supplier']),
		cyn_acf_add_url('website', 'website'),
		cyn_acf_add_color('color', 'Color'),

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

	cyn_register_acf_group('Company Settings', $fields, $location);
}

//	Services Function 
function cyn_register_acf_service_settings()
{
	$fields = [
		cyn_acf_add_text('hours', 'Hours'),
		cyn_acf_add_text('days', 'Days'),
		cyn_acf_add_text('weeks', 'Weeks'),
		cyn_acf_add_text('swiper-info', 'Swiper Info'),
		cyn_acf_add_group('info', 'Info', [

			cyn_acf_add_image('info-icon', 'Info Icon'),
			cyn_acf_add_text('info-text', 'Info Text'),
			cyn_acf_add_link('info-btn', 'Info btn'),
		]),

	];

	//Services Page Info Cards Loop 
	$info_cards = [];

	for ($i = 1; $i <= 3; $i++) {

		$info_card = cyn_acf_add_group("card_$i", __("Card $i", 'cyn-dm'), [

			cyn_acf_add_text("title_$i", __("Title $i", "cyn-dm")),

			cyn_acf_add_text("text_$i", __("Text $i", "cyn-dm")),

		]);

		array_push($info_cards, $info_card);
	}

	$fields = array_merge($fields, $info_cards);
	//End OF Services Page Info Cards Loop 


	//Services Page Slideshow
	$slideshow_imgs = [];

	for ($i = 1; $i <= 10; $i++) {

		$slideshow_img = cyn_acf_add_image("image_$i", __("Image $i", "cyn-dm"));


		array_push($slideshow_imgs, $slideshow_img);
	}

	$fields = array_merge($fields, $slideshow_imgs);
	//End of Services Page Slideshow


	//Services Page Features Section
	$features_cards = [];

	for ($i = 1; $i <= 3; $i++) {

		$features_card = cyn_acf_add_group("feature_card_$i", __("Feature Card $i", "cyn-dm"), [

			cyn_acf_add_image("feature_icon_$i", __("Icon $i", "cyn-dm")),

			cyn_acf_add_text("feature_title_$i", __("Title $i", "cyn-dm")),

			cyn_acf_add_text("feature_text_$i", __("Text $i", "cyn-dm")),

		]);

		array_push($features_cards, $features_card);
	}

	$fields = array_merge($fields, $features_cards);
	//End of Services Page Features Section

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'service',
			],
		],
	];

	cyn_register_acf_group('Service Settings', $fields, $location);
}
