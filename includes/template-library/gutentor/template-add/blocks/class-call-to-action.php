<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Call_To_Action' ) ) {

	/**
	 * Functions related to Call To Action
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Call_To_Action extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'call-to-action';

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
					'title'				=> __( 'Call To Action', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'call-to-action', 'call-to-action 1' ),
					'categories'		=> array( 'call-to-action' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/call-to-action/call-to-action-1/gutentor_call-to-action.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/call-to-action/call-to-action-1/call-to-action.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/call-to-action/#section-35e69fbe-80f4-43df-bf4e-494a345f66c0',
				),
				array(
					'title'				=> __( 'Call To Action', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'call-to-action', 'call-to-action 2' ),
					'categories'		=> array( 'call-to-action' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/call-to-action/call-to-action-2/gutentor_call-to-action.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/call-to-action/call-to-action-2/call-to-action.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/call-to-action/#section-84e22d48-168a-4acb-90ab-7c1567cd25eb',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Call_To_Action::get_instance()->run();