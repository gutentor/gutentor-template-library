<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Count_Down' ) ) {

	/**
	 * Functions related to Count Down
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Count_Down extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'count-down';

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
					'title'				=> __( 'Count Down', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'count-down', 'count-down 1' ),
					'categories'		=> array( 'count-down' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/count-down/count-down-1/gutentor_count-down.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/count-down/count-down-1/count-down.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/count-down/#section-621045f5-3c1d-446b-8072-6adb8eb55b5a',
				),
				array(
					'title'				=> __( 'Count Down', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'count-down', 'count-down 2' ),
					'categories'		=> array( 'count-down' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/count-down/count-down-2/gutentor_count-down.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/count-down/count-down-2/count-down.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/count-down/#section-a9be75b8-de57-47d7-990e-9133a84c25ac',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Count_Down::get_instance()->run();