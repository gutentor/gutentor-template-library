<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Tabs' ) ) {

	/**
	 * Functions related to Tabs
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Tabs extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'tabs';

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
					'title'				=> __( 'Tabs', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tabs', 'tabs 1' ),
					'categories'		=> array( 'tabs' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/tabs/tabs-1/gutentor_tabs.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/tabs/tabs-1/tabs.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/tabs/#section-a066ea7b-a982-4a33-a45f-0a6bec70bce7',
				),
				array(
					'title'				=> __( 'Tabs', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'tabs', 'tabs 2' ),
					'categories'		=> array( 'tabs' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/tabs/tabs-2/gutentor_tabs.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/tabs/tabs-2/tabs.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/tabs/#section-0eadb066-bbf6-464e-ae09-14a9a7c2f1e1',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Tabs::get_instance()->run();