<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Restaurant_Menu' ) ) {

	/**
	 * Functions related to Restaurant Menu
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Restaurant_Menu extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'restaurant-menu';

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
					'title'				=> __( 'Restaurant Menu', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'restaurant-menu', 'restaurant-menu 1' ),
					'categories'		=> array( 'restaurant-menu' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/restaurant-menu/restaurant-menu-1/gutentor_restaurant-menu.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/restaurant-menu/restaurant-menu-1/restaurant-menu.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/restaurant-menu/#section-eb78e751-096e-4dfd-8f12-b4a2c3f000e9',
				),
				array(
					'title'				=> __( 'Restaurant Menu', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'restaurant-menu', 'restaurant-menu 2' ),
					'categories'		=> array( 'restaurant-menu' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/restaurant-menu/restaurant-menu-2/gutentor_restaurant-menu.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/restaurant-menu/restaurant-menu-2/restaurant-menu.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/restaurant-menu/#section-992c7ec6-25e3-4eb2-8369-a4238352803f',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Restaurant_Menu::get_instance()->run();