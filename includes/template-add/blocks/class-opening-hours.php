<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Opening_Hours' ) ) {

	/**
	 * Functions related to Opening Hours
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Opening_Hours extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'opening-hours';

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
					'title'				=> __( 'Opening Hours', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'opening-hours', 'opening-hours 1' ),
					'categories'		=> array( 'opening-hours' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/opening-hours/opening-hours-1/gutentor_opening-hours.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/opening-hours/opening-hours-1/opening-hours.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/opening-hours/#section-d83e7661-98af-446f-a56a-9ee11702e3d2',
				),
				array(
					'title'				=> __( 'Opening Hours', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'opening-hours', 'opening-hours 2' ),
					'categories'		=> array( 'opening-hours' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/opening-hours/opening-hours-2/gutentor_opening-hours.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/opening-hours/opening-hours-2/opening-hours.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/opening-hours/#section-ae615b86-93be-48a4-855d-10b045883d3a',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Opening_Hours::get_instance()->run();