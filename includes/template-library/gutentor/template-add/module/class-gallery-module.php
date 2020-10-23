<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists('Gutentor_Template_Library_Block_Gallery_Module' ) ) {

	/**
	 * Functions related to Gallery Module
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Gallery_Module extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Gallery Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'gallery', 'gallery-module' ),
					'categories'		=> array( 'gallery-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/gallery-module/template-1/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/gallery-module/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/gallery-module/#gallery-module1',
				),
				
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Gallery_Module::get_instance()->run();