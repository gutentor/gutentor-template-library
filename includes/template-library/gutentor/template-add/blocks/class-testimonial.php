<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Testimonial' ) ) {

	/**
	 * Functions related to Testimonial
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Testimonial extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'testimonial';

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
					'title'				=> __( 'Testimonial', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'testimonial', 'testimonial 1' ),
					'categories'		=> array( 'testimonial' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/testimonial/testimonial-1/gutentor_testimonial.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/testimonial/testimonial-1/testimonial.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/testimonial/#section-62a6a138-ab1a-444f-a551-e6634ef72335',
				),
				array(
					'title'				=> __( 'Testimonial', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'testimonial', 'testimonial 2' ),
					'categories'		=> array( 'testimonial' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/testimonial/testimonial-2/gutentor_testimonial.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/testimonial/testimonial-2/testimonial.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/testimonial/#section-cf510900-4818-465b-8fcd-e54dae852951',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Testimonial::get_instance()->run();