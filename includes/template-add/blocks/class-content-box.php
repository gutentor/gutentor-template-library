<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Content_Box' ) ) {

	/**
	 * Functions related to Icon Box
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Content_Box extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'content-box';

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
					'title'				=> __( 'Content Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'content-box', 'content-box 1' ),
					'categories'		=> array( 'content-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/content-box/content-box-1/gutentor_content-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/content-box/content-box-1/content-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/#section-447d7b44-aa4b-40f2-9eaa-206a2ef5f561',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Content_Box::get_instance()->run();