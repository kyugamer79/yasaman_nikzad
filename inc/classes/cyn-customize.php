<?php

if ( ! class_exists( 'cyn_customize' ) ) {
	class cyn_customize {
		function __construct() {
			add_action( 'customize_register', [ $this, 'cyn_basic_settings' ] );
		}

		public function cyn_basic_settings( $wp_customize ) {

			$this->cyn_register_panel_demo( $wp_customize );
			$this->cyn_register_panel_demo_2( $wp_customize );

		}

		/**
		 * Summary of cyn_add_control
		 * @param mixed $wp_customize
		 * @param string $section name of section that this control related to
		 * @param string $type 'text' | 'textarea' | 'tel' | 'image' | 'file'
		 * @param string $id name that saved on wp_option table on database
		 * @param string $label 
		 * @param string $description
		 * @return void
		 */
		private function cyn_add_control( $wp_customize, $section, $type, $id, $label, $description = '' ) {
			$wp_customize->add_setting(
				$id,
				[ 'type' => 'option' ]
			);


			if ( $type == "file" ) {
				$wp_customize->add_control(
					new WP_Customize_Upload_Control(
						$wp_customize,
						$id,
						[ 
							'label' => $label,
							'section' => $section,
							'settings' => $id,
							'description' => $description,
						]
					)
				);
			}

			if ( $type != 'file' ) {
				$wp_customize->add_control(
					$id,
					[ 
						'label' => $label,
						'section' => $section,
						'settings' => $id,
						'type' => $type,
						'description' => $description,
					]
				);
			}
		}

		private function cyn_register_panel_demo( $wp_customize ) {

			$wp_customize->add_panel(
				'demo_panel',
				[ 
					'title' => 'CyanTheme - Demo Panel',
					'priority' => 1
				]
			);


			$wp_customize->add_section(
				'demo_section',
				[ 
					'title' => 'Demo section',
					'priority' => 1,
					'panel' => 'demo_panel'
				]
			);

			$this->cyn_add_control( $wp_customize, 'demo_section', 'text', 'demo_text_control', 'Demo Text Control' );
		}

		private function cyn_register_panel_demo_2( $wp_customize ) {

			$wp_customize->add_panel(
				'demo_panel_2',
				[ 
					'title' => 'CyanTheme - Demo Panel 2',
					'priority' => 2
				]
			);


			$wp_customize->add_section(
				'demo_section_2',
				[ 
					'title' => 'Demo section 2',
					'priority' => 1,
					'panel' => 'demo_panel_2'
				]
			);

			$this->cyn_add_control( $wp_customize, 'demo_section_2', 'file', 'demo_file_control', 'Demo File Control' );
		}

	}
}
