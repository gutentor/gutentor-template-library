<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Icon_Box' ) ) {

	/**
	 * Functions related to Icon Box
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Icon_Box extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'icon-box';

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
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 1' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-1/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-1/icon-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/icon-box/#section-18862d51-0408-4a36-88a7-006d9bb90e3b',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 2' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-2/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-2/icon-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/icon-box/#section-b52e1194-a4a6-4501-94d9-94bcb91549e3',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 3' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-3/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-3/icon-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/icon-box/#section-971dbb03-7d2f-4f25-84ad-72a8c94d6c3a',
				),

		

            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Icon_Box::get_instance()->run();