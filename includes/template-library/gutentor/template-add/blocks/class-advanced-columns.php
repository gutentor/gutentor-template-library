<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Advanced_Columns' ) ) {

	/**
	 * Functions related to Advanced Columns
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Advanced_Columns extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'advanced-columns';

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

				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 21' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-21/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-21/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/#section-f12b0d86-663c-4d5b-8cec-130f9cc4f953',
				// ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Advanced_Columns::get_instance()->run();