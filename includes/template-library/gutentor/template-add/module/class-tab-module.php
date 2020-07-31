<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Tab_Module' ) ) {

	/**
	 * Functions related to Tab Module
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Tab_Module extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'p1';

		/**
		 * Gets an instance of this object.
		 * Prevents duplicate instances which avoid artefacts and improves performance.
		 *
		 * @static
		 * @access public
		 * @since 1.0.1
		 * @return object
		 */
		public static function get_instance() {

			// Store the instance locally to avoid private static replication
			static $instance = null;

			// Only run these methods if they haven't been ran previously
			if ( null === $instance ) {
				$instance = new self();
			}

			// Always return the instance
			return $instance;

		}

		/**
         * Load block library
         * Used for blog template loading
         *
         * @since      1.1.5
         * @package    Gutentor
         * @author     Gutentor <info@gutentor.com>
         *
         * @param $templates_list array
         * @return array
         */
        public function add_block_template_library( $templates_list ){

            $block_library_list = array(

                array(
					'title'				=> __( 'Tab Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tab-module', 'tab-module 1' ),
					'categories'		=> array( 'tab-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-1/gutentor_m7.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-1/template-1.jpg',
					'demo_url'    =>'https://www.demo.gutentor.com/tabs/#28701d',
				),
				array(
					'title'				=> __( 'Tab Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tab-module', 'tab-module 2' ),
					'categories'		=> array( 'tab-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-2/gutentor_m7.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/tabs/#ab6566',
				),
				array(
					'title'				=> __( 'Tab Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tab-module', 'tab-module 3' ),
					'categories'		=> array( 'tab-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-3/gutentor_m7.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/tabs/#3fa986',
				),
				array(
					'title'				=> __( 'Tab Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tab-module', 'tab-module 4' ),
					'categories'		=> array( 'tab-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-4/gutentor_m7.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-4/template-4.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/tabs/#fc33d3',
				),
				array(
					'title'				=> __( 'Tab Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tab-module', 'tab-module 5' ),
					'categories'		=> array( 'tab-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-5/gutentor_m7.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/tab-module/template-5/template-5.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/tabs/#0b9ba5',
				),
			
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Tab_Module::get_instance()->run();