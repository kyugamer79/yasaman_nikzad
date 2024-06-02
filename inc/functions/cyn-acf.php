<?php

use RankMath\Schema\Publisher;

add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	cyn_register_acf_company_settings();
	cyn_register_acf_service_settings();
	cyn_register_acf_frontpage_settings();
	cyn_register_acf_consent_settings();
	cyn_register_acf_resume_settings();
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



// Home Page Function //
function cyn_register_acf_frontpage_settings()
{
	$fields = [



		cyn_acf_add_tab('intro'),
		cyn_acf_add_group('intro', __("Intro", "cyn-dm"), [
			cyn_acf_add_image('intro-img', 'Intro Image'),
			cyn_acf_add_text('intro-name', 'Intro Name'),
			cyn_acf_add_text('intro-job', 'Intro Job'),
		]),
		cyn_acf_add_tab('Swiper Info'),
		cyn_acf_add_group('swiper-info', 'Swiper Info', [
			cyn_acf_add_text('swiper-txt-1', 'Swiper Text 1'),
			cyn_acf_add_text('swiper-txt-2', 'Swiper Text 2'),
			cyn_acf_add_link('swiper-btn', 'Swiper Button'),
		]),
		cyn_acf_add_tab('Landmark Image & Text'),
		cyn_acf_add_image('landmark-percent-img', 'Landmark Percent Image'),
		// cyn_acf_add_image('landmark-percent-mobile-img', 'Landmark Percent Mobile Image'),
		cyn_acf_add_text('landmark-percent-txt', 'Landmark Percent Text'),
		cyn_acf_add_tab('Blog Post'),
		cyn_acf_add_link('blog-post-btn', 'Blog Post Button'),
		cyn_acf_add_tab('Video Teaser'),
		cyn_acf_add_file('teaser-cover', 'Teaser Cover'),
		cyn_acf_add_file('teaser-video', 'Teaser Video'),

	];

	//Homepage Page Slideshow

	$slideshow_imgs = [];

	for ($i = 1; $i <= 3; $i++) {
		$slideshow_img = cyn_acf_add_image("image_$i", __("Image $i", "cyn-dm"));


		array_push($slideshow_imgs, $slideshow_img);
	};

	array_push($fields, cyn_acf_add_tab('Slideshow Images'));
	$fields = array_merge($fields, $slideshow_imgs);
	//End of Homepage Slideshow


	//HomePage landmark statistics
	$landmarks_percent = [];


	for ($i = 1; $i <= 6; $i++) {

		$landmark_percent =

			cyn_acf_add_group("landmark-statistics_$i", "Landmark Statistics $i", [
				cyn_acf_add_text("landmark-name_$i", "Landmark Name $i"),
				cyn_acf_add_number("landmark-percent_$i", "Landmark Percent $i"),
			]);

		array_push($landmarks_percent, $landmark_percent);
	}

	array_push($fields, cyn_acf_add_tab('Landmarks'), cyn_acf_add_link('view-all', 'View All Button'));
	$fields = array_merge($fields, $landmarks_percent);
	//End of HomePage landmark statistics


	//Features Section
	$features_cards = [];

	for ($i = 1; $i <= 3; $i++) {

		$features_card = cyn_acf_add_group("feature_card_$i", __("Feature Card $i", "cyn-dm"), [

			cyn_acf_add_image("feature_icon_$i", __("Icon $i", "cyn-dm")),

			cyn_acf_add_text("feature_title_$i", __("Title $i", "cyn-dm")),

			cyn_acf_add_text("feature_text_$i", __("Text $i", "cyn-dm")),

		]);

		array_push($features_cards, $features_card);
	}

	array_push($fields, cyn_acf_add_tab('Feature Cards'));

	$fields = array_merge($fields, $features_cards);

	//End of Features Section


	$location = [
		[
			[
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/frontpage.php'
			],
		],
	];

	cyn_register_acf_group('Home Page Settings', $fields, $location);
}
// End of Home Page Function //




//	Services Function //
function cyn_register_acf_service_settings()
{
	$fields = [
		cyn_acf_add_tab('Service timeline'),
		cyn_acf_add_text('hours', 'Hours'),
		cyn_acf_add_text('days', 'Days'),
		cyn_acf_add_text('weeks', 'Weeks'),
		cyn_acf_add_tab('Swiper Information'),
		cyn_acf_add_text('swiper-info', 'Swiper Info'),
		cyn_acf_add_tab('Get in Touch Button'),
		cyn_acf_add_group('info', 'Info', [
			cyn_acf_add_image('info-icon', 'Info Icon'),
			cyn_acf_add_text('info-text', 'Info Text'),
			cyn_acf_add_link('info-btn', 'Info btn'),
		]),
	];

	//Services Page Info Cards Loop 
	$info_cards = [];

	for ($i = 1; $i <= 3; $i++) {

		$info_card = cyn_acf_add_group("info_card_$i", __("Card $i", 'cyn-dm'), [

			cyn_acf_add_text("title", __("Title", "cyn-dm")),

			cyn_acf_add_text("text", __("Text", "cyn-dm")),

		]);

		array_push($info_cards, $info_card);
	}

	array_push($fields, cyn_acf_add_tab('Info Cards'));

	$fields = array_merge($fields, $info_cards);
	//End OF Services Page Info Cards Loop 


	//Services Page Slideshow
	$slideshow_imgs = [];

	for ($i = 1; $i <= 10; $i++) {

		$slideshow_img = cyn_acf_add_image("image_$i", __("Image $i", "cyn-dm"));


		array_push($slideshow_imgs, $slideshow_img);
	}

	array_push($fields, cyn_acf_add_tab('Slideshow'));

	$fields = array_merge($fields, $slideshow_imgs);
	//End of Services Page Slideshow

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
//End of Services Function //

//consent post type 

function cyn_register_acf_consent_settings()
{
	$fields = [


		cyn_acf_add_text("consent_position", __("Position", "cyn-dm")),

		cyn_acf_add_text("consent_text", __("Text", "cyn-dm")),


	];
	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'consent',
			],
		],
	];

	cyn_register_acf_group('Consent Settings', $fields, $location);
}

//resume post type 

function cyn_register_acf_resume_settings()
{
	$fields = [


		cyn_acf_add_text("resume_location", __("Location", "cyn-dm")),

		cyn_acf_add_text("resume_year", __("Year", "cyn-dm")),

		cyn_acf_add_text("resume_text", __("Text", "cyn-dm")),

	];

	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'resume',
			],
		],
	];

	cyn_register_acf_group('Resume Settings', $fields, $location);
}


// End of resume post type