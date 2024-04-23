<?php

if ( ! class_exists( 'cyn_theme_init' ) ) {
	class cyn_theme_init {
		public $build, $ver;

		function __construct( $build, $ver ) {
			$this->build = $build;
			$this->ver = $ver;


			add_action( 'init', [ $this, 'cyn_theme_init' ] );
			add_action( 'wp_enqueue_scripts', [ $this, 'cyn_enqueue_files' ] );
			add_action( 'admin_enqueue_scripts', [ $this, 'cyn_admin_files' ] );
			add_action( 'wp_logout', [ $this, 'cyn_logout_user' ] );
			add_action( 'after_setup_theme', [ $this, 'cyn_theme_setup' ] );
			add_filter( 'wp_check_filetype_and_ext', [ $this, 'cyn_allow_svg' ], 10, 4 );
			add_filter( 'upload_mimes', [ $this, 'cyn_mime_types' ] );

			$this->cyn_register_acf();

		}



		public function cyn_theme_init() {
			add_filter( 'use_block_editor_for_post', '__return_false' );
			add_filter( 'login_errors', function () {
				return null;
			} );
			$this->cyn_remove_actions();
		}

		public function cyn_remove_actions() {
			// REMOVE WP EMOJI
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' );

			remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
			remove_action( 'wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles' );
			remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
		}

		public function cyn_enqueue_files() {

			$css_path = $this->build ? '/assets/css/styles-main.css' : '/assets/css/compiled.css';
			$js_path = $this->build ? '/assets/js/dist/scripts.min.js' : '/assets/js/dist/scripts.bundle.js';

			wp_enqueue_style( 'cyn-theme', get_stylesheet_directory_uri() . $css_path, [], $this->ver );
			wp_enqueue_style( 'cyn-style', get_stylesheet_uri() );
			wp_dequeue_style( 'wp-block-library' );

			wp_enqueue_script( 'cyn-theme', get_stylesheet_directory_uri() . $js_path, [ 'jquery' ], $this->ver, true );
			wp_dequeue_script( 'global-styles' );
		}

		public function cyn_admin_files() {
			wp_enqueue_style( 'cyn-admin', get_stylesheet_directory_uri() . '/assets/css/admin.css' );
			wp_enqueue_script( 'cyn-admin', get_stylesheet_directory_uri() . '/assets/js/admin.js' );
		}

		public function cyn_logout_user() {
			wp_redirect( home_url() );
			exit();
		}

		public function cyn_theme_setup() {
			add_theme_support( 'custom-logo' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'html5', [ 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ] );

			//add_theme_support( 'woocommerce' );
		}

		public function cyn_allow_svg( $data, $file, $filename, $mimes ) {
			$filetype = wp_check_filetype( $filename, $mimes );

			return [ 
				'ext' => $filetype['ext'],
				'type' => $filetype['type'],
				'proper_filename' => $data['proper_filename']
			];
		}

		public function cyn_mime_types( $mimes ) {
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}

		public function cyn_register_acf() {
			add_filter( 'acf/settings/url', function ($url) {
				return CYN_ACF_URL;
			} );
			add_filter( 'acf/settings/show_updates', '__return_false', 100 );
			add_filter( 'acf/settings/show_admin', '__return_false', 100 );
		}
	}
}
