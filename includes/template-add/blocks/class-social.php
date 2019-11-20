<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Social' ) ) {

	/**
	 * Functions related to Social
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Social extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'social';

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
					'title'				=> __( 'Social', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'social', 'social 1' ),
					'categories'		=> array( 'social' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/social/social-1/gutentor_social.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/social/social-1/social.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/social/#section-35f902ba-cd22-4920-bc39-d104e23f3b89',
				),
				array(
					'title'				=> __( 'Social', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'social', 'social 2' ),
					'categories'		=> array( 'social' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/social/social-2/gutentor_social.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/social/social-2/social.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/social/#section-5c8ad360-50a8-4201-ad09-13975983be71',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Social::get_instance()->run();